const fs = require('fs')
const path = require('path')
const { minify } = require('csso')

const args = process.argv.slice(2)
const inputFileName = args[0] 
const input = fs.readFileSync(inputFileName)
const { css } = minify(input)
console.log(css)
