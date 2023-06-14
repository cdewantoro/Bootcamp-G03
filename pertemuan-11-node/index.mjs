// Module
// Module adalah 1 sistem file
// 1. Local Module
//    Modul yang kita buat sendiri


// import
// const ini = require('./lingkaran.js');

// import versi js terbaru - node js belum mendukung
// import {lingkaran,pi} from './lingkaran'

// destruct memecah object
// const { lingkaran, pi } = require('./lingkaran.js');

// console.log(pi);
// console.log(lingkaran(7));


// 2. Core Module
//    Module bawaan node js


// const fs = require('fs');

// const data = 'Ini adalah file yang kita buat'

// fs.writeFile('coba.txt', data, (err) => {
//     if (err) console.log("terjadi kesalahan di ", err);

//     console.log("File berhasil dibuat");
// })


// 3. third-party NPM (Node Package Manager)
//    Module yang dibuat oleh pihak ketiga

// const chalk = require("chalk");

import chalk from 'chalk';

console.log(chalk.blue("Hello World"));