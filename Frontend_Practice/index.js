// console.log("Hello World");
// var a=5;
// function test(){
//     var a=6;
//     a=a+2;



// console.log(a);
// }

// test();


// console.log(a);
// let a=5;

// let a=5;
// function test(){
//     let a=5;
//     a=a+5;
// }

// test();
// console.log(a);


// let a=5;
// let b='5';

// console.log(a===b);

// String
// Number
// BigInt
// Boolean
// undefined
// null
// Symbol
// Object

// let a=undefined;
// console.log(typeof a);

// const arr = [4, 5, 6, 7, 8];
// console.log(a[3]);

// for(let i=0;i<arr.length;i++){
//     console.log(arr[i]);

// }
// for(let a of arr ){
//     console.log(a); 
// }

// for(let a in arr){
//     console.log(arr[a]);
// }
// 0=>1,1=>2
// const person={fname:"Jhone",lane:"Doe",age:"25"};
// for(let x in person){
//     console.log(person[x]);
// }

// function print(a) {
//     console.log(a);
// }

// const print = function (a) {
// console.log(a);
// }

// const print=(a)=>{
//     console.log(a);
// }

// arr.forEach((a) =>console.log(a));



// console.log(arr.length);
// console.log(arr[2]);
// console.log(arr.at(-1));
// arr.push(9);
// arr.pop();
// arr.unshift(3);
// arr.shift();
// arr.splice(2,1,10,45,78);
// const arr1=[[1,2,3],[4,5],[7,8]]
// const arr2=arr1.flat();

// const arr3=arr2.slice(2,5);
// console.log(arr2);
// console.log(arr3);


// const arr = [4, 5, 6, 7,6, 8,9];

// for(let a of arr){
//     console.log(a*2);

//     a=a*2;
// }

// console.log(arr);

// const newArr=arr.map((x)=>x*2);
// const newArr=arr.filter((x)=>x>6);
// const ele=arr.find((x)=>x>6);
// let sum=0;
// for (const element of arr) {
//     sum+=element;
// }
// console.log(sum);

// const ele=arr.reduce((acc,item)=>{
//     acc+=item;
//     return acc;
// },0)

/*
task1: multiply each element by 9;
task2: after multiply filter element greater 50;
task3: then after filter add all filtered element 
*/

// const ele = arr.map(x => x * 9).filter(x => x > 50).reduce((sum, item) => sum += item, 0);

// const idx=arr.findIndex(x=>x>6);
//  const idx=arr.findLast(x=>x>6);
//  const idx=arr.findLastIndex(x=>x>6);
// const idx=arr.indexOf(6);
// const idx=arr.lastIndexOf(6);
// const idx=arr.includes(77);

// console.log(idx);




// const arr2=['d','a','b','c'];

// arr2.sort();
// const arr3=arr2.toSorted();
// const arr2=[4,12,1,5,6];
// const arr3=arr2.toSorted((a,b)=>a-b);
// arr2.sort((a,b)=> b-a);
// console.log(arr2);

// arr2.reverse();
// const arr3=arr2.toReversed();
// console.log(arr3);


// const cars = [
//     {
//         type: "Volvo", year: 2020
//     },
//     {
//         type: "Saab", year: 2022
//     },
//     {
//         typ: "BMW", year: 2000
//     }
// ]

// cars.sort((a,b)=>a.year-b.year);
// console.log(cars);


// const arr2 = [4, 12, 1, 5, 6];
// const arr3 = [5, 6, 7, 8, 10, 12];

// const arr = [...arr2, ...arr3];
// console.log(arr);


// const a = 5;
// const b = 6;
// const c=14;
// console.log(Math.PI);
// console.log(Math.round(4.4));
// console.log(Math.ceil(4.4));
// console.log(Math.floor(4.7));
// console.log(Math.trunc(4.8));
// console.log(Math.pow(8,2));
// console.log(Math.sqrt(64));
// console.log(Math.abs(-4.9));

// console.log(Math.max(a,b,c));

// console.log(Math.min(a,b,c));



// const arr = [4, 5, 0, 2, 3];

// console.log(Math.max(...arr));

// console.log(Math.min(...arr));

// let a=123;

// console.log(typeof a.toString());

// let x=5.233456;


// console.log(x.toFixed(0));



// let x="5";
// console.log(typeof parseInt(x));
// console.log(Number.isInteger("10"));
// console.log(Number.isFinite(4/0));
// console.log(Number.isNaN(4/"abc"));


// console.log(Math.random());


// const rand=Math.floor(Math.random()*10);//0-9
// const rand=Math.floor(Math.random()*11);//0-10

// const rand=Math.floor(Math.random()*10)+1;//1-10

// console.log(rand);


// const d=new Date();
// const d=new Date("2022-03-24");
// console.log(d.getFullYear());
// const month=["Jan","Feb","Mar","April","May","June","July","August"];
// console.log(month[d.getMonth()]);
// console.log(d.getDate());
// d.setMonth(11)
// console.log(d.getMonth());


// const str="   aabbcc   ";
// console.log(str.length);
// console.log(str.charAt(2));
// console.log(str.charCodeAt(2));
// console.log(str[2]);
// console.log(str.at(-1));
// console.log(str.toUpperCase());

// console.log(str.toLowerCase());

// const newStr=str.trim();
// const newStr=str.trimStart();
// const newStr=str.trimEnd();
// console.log(newStr.length);

// let text="Apple, Banana, Kiwi ";
// let slicedPart=text.slice(7,10);
// let slicedPart=text.substr(7,3);
// console.log(slicedPart);
// let result=text.repeat(3);
// console.log(result);

// let str="a,b,c,d,e";
// let arr=str.split(',')
// console.log(arr);
// console.log(arr.join('*'));




// let text = "Apple, Kiwi, Banana, Kiwi ";

// let newText=text.replace("Kiwi","Guava");
// let newText=text.replaceAll("Kiwi","Guava");

// let newText=text.replace(/kiwi/ig,"Guava");
// console.log(newText);

// console.log(text.indexOf("kiwi"));
// let isExists=text.search(/kiwi/);
// let isExists=text.includes("sskiwi");
// console.log(isExists);

// function add(a, b) {
//     let c = 0;
//     c = a + b;
//     return c;
// }

// let a=5;
// let b=6;
// let res = add(a, b);
// console.log("Addition of a="+a+" and b="+b+" is:", res);


// function add(...args) {
//     let c = 0;
//     // console.log(args.length);
//     c = args.reduce((sum, item) => {
//         sum += item;
//         return sum;
//     }, 0);

//     return c;
// }

// let a = 5;
// let b = 6;
// let res = add(a, b, 5, 6, 8, 9);
// console.log("Addition of a="+a+" and b="+b+" is:", res);
// console.log(`Addition of a=${a} and b=${b} is ${res}`);//String Template

// let num=6;
// let caseCheck=num%2;
// switch(caseCheck){
//     case 0:console.log("Even Number");
//             break;
//     case 1:
//         console.log("Odd Number");
//         break;
//     default:console.log("Case not matched!");    
// }


// hoisting & returnn statement
// console.log(greet("Alice"));
// function greet(name) {
//     return `Hello, ${name}!`;
// }

// const greet = (name) =>`Hello, ${name}!`;

//this binding

// function Person() {
//     this.name = "Jhon";
//     console.log(this.name);

//     setTimeout(function () {
//         this.name = "Jhon";
//         console.log(this.name);

//     }, 1000)
// }

// new Person();
// function Person() {
//     this.name = "Jhon";


//     setTimeout(() => {

//         console.log(this.name);

//     }, 1000)
// }

// new Person();

//Arguments Object

// function showArgs(){
//     console.log(arguments);
// }

// const showArgs = (...arguments) => {
//     console.log(arguments);
// }
// showArgs(1, 2, 3, 45);


//Object Literal
// const obj = {
//     name: 'Jhon',
//     roll: 45,
//     age: 22,
//     greet: function () {
//         return `Hello, ${this.name}`;
//     }
// }
// for (const key in obj) {
//     console.log(obj[key]);

// }
// console.log(obj.greet());

//empty object pattern
// const person={};
// person.name="Jhon";
// person.roll=24;
// person.age=22;
// person.greet=function(){
//     return `Hello, ${this.name}`;
// }

// console.log(person.greet());

//Object with new keyword
// const person = new Object({
//     name: 'Jhon',
//     roll: 45,
//     age: 22,
//     greet: function () {
//         return `Hello, ${this.name}`;
//     }
// });

// person.color = "blue";
// console.log(person.greet());
// console.log(person["color"]);

//Object Constructor
// function Person(name,roll,age){
//     this.name=name;
//     this.roll=roll;
//     this.age=age;
// }

// const obj=new Person('Jhon',25,22);
// console.log(obj.name);



const person = {
    name: 'Jhon',
    roll: 45,
    age: 22,
    uid: 4578785,
}


// person.age = 25;
// Object.defineProperty(person, 'uid', {
//     value: 4578785,
//     writable: false,
//     enumerable: true,
// })

// for (const key in person) {
//     console.log(person[key]);
// }
// person.uid = 1234;
// console.log(person.uid);


//closure and lexical scope

let globalVar = "I am global";
function outer() {
    let outerVar = "I am in outerFunction";
    function innerFunction() {
        let innerVar = "I am innerFunction";
        console.log(globalVar);
        console.log(outerVar);
        console.log(innerVar);
    }
    innerFunction();
    // console.log(innerVar);//
}
// outer();
// console.log(outerVar);


// function counter() {
//     let count = 0;
//     return function () {
//         count++;
//         return count;
//     }
// }

// let c = counter();
// console.log(c());


// let promise1 = new Promise((resolve, reject) => {
//     let error = true; // Change this to true to simulate an error
//     if(error){
//         reject("Promise 1 rejected");
//     }
//     setTimeout(() => {
//         resolve("Promise 1 resolved");
//     }, 1000);
// }); 

// promise1.then((result) => {
//     console.log(result);
// }).catch((error) => {
//     console.error(error);
// });

function promise1() {
    return new Promise((resolve, reject) => {
        let error = true; // Change this to true to simulate an error
        if (error) {
            reject("Promise 1 rejected");
        }
        setTimeout(() => {
            resolve("Promise 1 resolved");
        }, 1000);
    });
}


async function handlePromises() {
    try {
        const res = await promise1();
        console.log(res);
    } catch (error) {
        console.error(error);
    }
}

handlePromises();