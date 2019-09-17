import babel from 'rollup-plugin-babel';
import resolve from 'rollup-plugin-node-resolve';
import commonjs from 'rollup-plugin-commonjs';
import json from 'rollup-plugin-json';
import { terser } from "rollup-plugin-terser";
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
            commonjs(),
            json({
                compact: true
            }),
            babel({
                exclude: 'node_modules/**'
            }),
            terser()
        ],
        onwarn: function (warning, warn) {
          if (warning.code === 'CIRCULAR_DEPENDENCY') {
            return
          }
          warn(warning)
        }
    }
];
