<?php
/**
 * BulletProof
 *
 * Bulletproof is a single-class, secure and user-friendly Image uploader in php.
 *
 * PHP support 5.3+
 *
 * @package     bulletproof
 * @version     3.0.0
 * @author      https://twitter.com/_samayo
 * @link        https://github.com/samayo/bulletproof
 * @license     MIT
 */
namespace BulletProof;

class Image implements \ArrayAccess
{
    /**
     * @var string The new image name, to be provided or will be generated.
     */
    protected $name;

    /**
     * @var int The image width in pixels
     */
    protected $width;

    /**
     * @var int The image height in pixels
     */
    protected $height;

    /**
     * @var string The image mime type (extension)
     */
    protected $mime;

    /**
     * @var string The full image path (dir + image + mime)
     */
    protected $fullPath;

    /**
     * @var string The folder or image storage location
     */
    protected $location;

    /**
     * @var array A json format of all information about an image
     */
    protected $serialize = array();

    /**
     * @var array The min and max image size allowed for upload (in bytes)
     */
    protected $size = array(100, 500000);

    /**
     * @var array The max height and width image allowed
     */
    protected $dimensions = array(5000, 5000);

    /**
     * @var array The mime types allowed for upload
     */
    protected $mimeTypes = array("jpeg", "png", "gif");

    /**
     * @var array list of known image types
     */
    protected $imageMimes = array(
        1 => "gif", "jpeg", "png", "swf", "psd",
        "bmp", "tiff", "tiff", "jpc", "jp2", "jpx",
        "jb2", "swc", "iff", "wbmp", "xbm", "ico"
    );

    /**
     * @var array storage for the $_FILES global array
     */
    private $_files = array();

    /**
     * @var string storage for any errors
     */
    private $error = "";

    /**
     * @var array error messages strings
     */
    protected $common_upload_errors = array(
        0 => '',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.'
    );

    /**
     * @param array $_files represents the $_FILES array passed as dependency
     */
    public function __construct(array $_files = array())
    {
        /* check if php_exif is enabled */
        if (!function_exists('exif_imagetype')) {
            $this->error = "Function 'exif_imagetype' Not found. Please enable \"php_exif\" in your PHP.ini";
            return null;
        }

        $this->_files = $_files;
    }

    /**
     * Gets the real image mime type
     *
     * @param $tmp_name string The upload tmp directory
     *
     * @return bool|string
     */
    protected function getImageMime($tmp_name)
    {
        $mime = @$this->imageMimes[exif_imagetype($tmp_name)];

        if (!$mime) {
            return null;
        }

        return $mime;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * @param mixed $offset
     * @return null
     */
    public function offsetExists($offset)
    {
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Gets array value \ArrayAccess
     *
     * @param mixed $offset
     *
     * @return bool|mixed
     */
    public function offsetGet($offset)
    {
        if ($offset == "error") {
            return $this->error;
        }

        if (isset($this->_files[$offset]) && file_exists($this->_files[$offset]["tmp_name"])) {
            $this->_files = $this->_files[$offset];
            return true;
        }

        return false;
    }


    /**
     * Provide image name if not provided
     *
     * @param null $isNameProvided
     * @return $this
     */
    public function setName($isNameProvided = null)
    {
        if ($isNameProvided) {
            $this->name = filter_var($isNameProvided, FILTER_SANITIZE_STRING);
        }

        return $this;
    }

    /**
     * Define a mime type for uploading
     *
     * @param array $fileTypes
     *
     * @return $this
     */
    public function setMime(array $fileTypes)
    {
        $this->mimeTypes = $fileTypes;
        return $this;
    }

    /**
     * Define a min and max image size for uploading
     *
     * @param $min int minimum value in bytes
     * @param $max int maximum value in bytes
     *
     * @return $this
     */
    public function setSize($min, $max)
    {
        $this->size = array($min, $max);
        return $this;
    }

    /**
     * Creates a location for upload storage
     *
     * @param $dir string the folder name to create
     * @param int $permission chmod permission
     *
     * @return $this
     */
    public function setLocation($dir = "bulletproof", $permission = 0766)
    {
        if (!file_exists($dir) && !is_dir($dir) && !$this->location) {
            $createFolder = @mkdir("" . $dir, (int)$permission, true);
            if (!$createFolder) {
                $this->error = "Error! Folder " . $dir . " could not be created";
                return false;
            }
        }

        $this->location = $dir;
        return $this;
    }

    /**
     * Sets acceptable max image height and width
     *
     * @param $maxWidth int max width value
     * @param $maxHeight int max height value
     *
     * @return $this
     */
    public function setDimension($maxWidth, $maxHeight)
    {
        $this->dimensions = array($maxWidth, $maxHeight);
        return $this;
    }

    /**
     * Returns the image name
     *
     * @return string
     */
    public function getName()
    {
        if (!$this->name) {
            return uniqid(true) . "_" . str_shuffle(implode(range("e", "q")));
        }

        return $this->name;
    }

    /**
     * Returns the full path of the image ex "location/image.mime"
     *
     * @return string
     */
    public function getFullPath()
    {
        $this->fullPath = $this->location . "/" . $this->name . "." . $this->mime;
        return $this->fullPath;
    }

    /**
     * Returns the image size in bytes
     *
     * @return int
     */
    public function getSize()
    {
        return (int)$this->_files["size"];
    }

    /**
     * Returns the image height in pixels
     *
     * @return int
     */
    public function getHeight()
    {
        if ($this->height != null) {
            return $this->height;
        }

        list(, $height) = getImageSize($this->_files["tmp_name"]);
        return $height;
    }

    /**
     * Returns the image width
     *
     * @return int
     */
    public function getWidth()
    {
        if ($this->width != null) {
            return $this->width;
        }

        list($width) = getImageSize($this->_files["tmp_name"]);
        return $width;
    }

    /**
     * Returns the storage / folder name
     *
     * @return string
     */
    public function getLocation()
    {
        if (!$this->location) {
            $this->setLocation();
        }

        return $this->location;
    }

    /**
     * Returns a JSON format of the image width, height, name, mime ...
     *
     * @return string
     */
    public function getJson()
    {
        return json_encode($this->serialize);
    }

    /**
     * Returns the image mime type
     *
     * @return string
     */
    public function getMime()
    {
        if (!$this->mime) {
            return $this->getImageMime($this->_files["tmp_name"]);
        }
        return $this->mime;
    }

    /**
     * Returns error string or false if no errors occurred
     *
     * @return string|bool
     */
    public function getError()
    {
        return $this->error != "" ? $this->error : false;
    }

    /**
     * Checks for the common upload errors
     *
     * @param $e int error constant
     */
    protected function commonUploadErrors($e)
    {
        return $this->common_upload_errors[$e];
    }

    /**
     * This methods validates and uploads the image
     * @return bool|Image|null
     */
    public function upload()
    {
        /* modify variable names for convenience */
        $image = $this;
        $files = $this->_files;

        /* check for common upload errors */
        if ($image->error || $image->error = $image->commonUploadErrors($files["error"])) {
            return null;
        }

        /* check image for valid mime types and return mime */
        $image->mime = $image->getImageMime($files["tmp_name"]);

        /* validate image mime type */
        if (!in_array($image->mime, $image->mimeTypes)) {
            $ext = implode(", ", $image->mimeTypes);
            $image->error = "Invalid File! Only ($ext) image types are allowed";
            return null;
        }


        /* initialize image properties */
        $image->name = $image->getName();
        $image->width = $image->getWidth();
        $image->height = $image->getHeight();
        $image->location = $image->getLocation();

        /* get image sizes */
        list($minSize, $maxSize) = $image->size;

        /* check image size based on the settings */
        if ($files["size"] < $minSize || $files["size"] > $maxSize) {
            $min = intval($minSize / 1000) ?: 1;
            $max = intval($maxSize / 1000) ?: 1;
            $image->error = "Image size should be at least " . $min . " kB, and no more then " . $max . "kB";
            return null;
        }

        /* check image dimension */
        list($allowedWidth, $allowedHeight) = $image->dimensions;

        if ($image->height > $allowedHeight || $image->width > $allowedWidth) {
            $image->error = "Image height/width should be less than " . $allowedHeight . "/" . $allowedWidth . " pixels";
            return null;
        }

        if ($image->height < 2 || $image->width < 2) {
            $image->error = "Image height/width too small or corrupted.";
            return null;
        }

        /* set and get folder name */
        $image->fullPath = $image->location . "/" . $image->name . "." . $image->mime;

        /* gather image info for json storage */
        $image->serialize = array(
            "name" => $image->name,
            "mime" => $image->mime,
            "height" => $image->height,
            "width" => $image->width,
            "size" => $files["size"],
            "location" => $image->location,
            "fullpath" => $image->fullPath
        );

        /* check if we can create a file in the directory */
        if (!is_writable($image->location)) {
            echo "The images directory \"" . $image->location . "\" is not writable!";
            return null;
        }

        if ($image->error === "") {
            $moveUpload = $image->moveUploadedFile($files["tmp_name"], $image->fullPath);
            if (false !== $moveUpload) {
                return $image;
            }
        }

        $image->error = "Upload failed, Unknown error occurred";
        return false;
    }

    /**
     * Final upload method to be called, isolated for testing purposes
     *
     * @param $tmp_name int the temporary location of the image file
     * @param $destination int upload destination
     *
     * @return bool
     */
    public function moveUploadedFile($tmp_name, $destination)
    {
        return move_uploaded_file($tmp_name, $destination);
    }
}
