import resolve from 'rollup-plugin-node-resolve';
import commonjs from 'rollup-plugin-commonjs';
import pkg from './package.json';

export default [
    // browser-friendly UMD build
    {
        input: './index.js',
        output: {
            file: '../index.js',
            name: 'Hy52fWS8r', // The global name for the factory of this UMD
            format: 'umd'
        },
        plugins: [
            resolve(),
            commonjs()
        ]
    }
];
