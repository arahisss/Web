"use strict";

let a = 'AA'

let x = 2;
let n = 10;

// Возведение в степень
function pow(x, n) {
    if (n > 0 & x > 0) {
        return x * pow(x, n-1);
    }
    else {
        return 1;
    }
}

alert(pow(x, n));

// Нахождение НОД
function gcd(a, b) {
    let nod = 1;
    if (a > 0 & b > 0) {
        for (let i = 2; i < Math.max(a, b); i++) {
            if ((a % i == 0) & (b % i == 0)) {
                nod = i;
            }
        }
    }
    return nod;
}

alert(`НОД: ${gcd(12, 6)}`);

// Наименьшая цифра
function minDigit(x) {
    if (x > 0) {
        let s = String(x);
        let minDigit = 10;
        for (let i = 0; i < s.length; i++) {
            if (Number(s[i]) < minDigit) {
                minDigit = Number(s[i]);
            }
        }
        alert(minDigit);
    }
}

minDigit(987665);

// Число для функции
let number = 0;

function pluralizeRecords(n, was){
    n = Math.abs(n) % 100; 
    let n1 = n % 10;
    if ((n != 11) && (n1 == 1)) {
        return was[1];
    }
    return was[0];
}

let answerRecord = pluralizeRecords(number, ['было найдено', 'была найдена']);

function pluralization (n, words){
    n = Math.abs(n) % 100;
    var n1 = n % 10;
    if (n > 10 && n < 20) { 
        return words[2]; 
    }
    if (n1 > 1 && n1 < 5) { 
        return words[1]; 
    }
    if (n1 == 1) { 
        return words[0]; 
    }
    return words[2];
}
let answer4 = pluralization(number, ['запись', 'записи', 'записей']);
alert(`В результате выполнения запроса ${answerRecord} ${number} ${answer4}`);


let error = "Ошибка";
function fibb(n){
    let last = 1, next = 1;
    if (n <= 1000) {
        for(let i = 1; i < n; i++){
            let current = next;
            next = last + next;
            last = current;
        }
    } else {
        return error;
    }
    return last;
}

let res = fibb(52);
alert(`Число Фибоначчи: ${res}`);

