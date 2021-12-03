// function person(name,age)
// {
//     const salary = "Salary";
//     return {
//         name,
//         age,

//         getName(){
//             return this.name +" " + this.age;
//         },
//     };
// }
// console.log(person("Nam",21).getName());

// var person = {
//     name: "David",
//     age: 22,
// };
// var salary = "Salary";
// person[salary+" of David"] = 200000;
// console.log("es5 - person",person);

//arrow function
// var person = {
//     name: "David",
//     age: 21,
//     getDescription: function(){
//         console.log("Toi ten la: "+this.name+", Nam nay toi "+this.age+" Tuoi");
//         // var that = this;
//         getAge = ()=>console.log(" ES6 Nam nay toi "+this.age+" tuoi");
//         getAge();
//     },
// };
// person.getDescription();

//Destructuring Assignment
// const person = {
//     name: "David",
//     job: "it",
//     salary: 20000,
// };
// const {name,salary} = person;
// console.log({name,salary});

// class ES5
// function Person(name,age)
// {
//     this.name = name;
//     this.age = age;
//     console.log(this);
// }
// Person.prototype.getJob = function(){
//     return "Cong viec cua toi la: "+this.job;
// };
// var bod = new Person("David",23);
// var david = Object.create(new Person("david",99));
// console.log(david.name);
// console.log(david.age);
// david.job = "IT";
// console.log(david.getJob());

//Class ES6

// class Person{
//     constructor(name,age){
//         this.name = name;
//         this.age = age;
//     }
//     getJob()
//     {
//         console.log(`Cong viec cua toi la ${this.job}`);
//     }
// }
// class Worker extends Person{
//     constructor(name,age,job){
//         super(name,age);
//         this.job = job;
//     }   
// }
// const worker = new Worker('Nam',23,'IT');
// console.log(worker);
// worker.getJob();

// ES5
// function getAllDataFromDB(callback)
// {
//     console.log("start");
//     setTimeout(()=>{
//         var database = ["Hanoi","HoChiMinh","DaNang"];
//         callback(database);
//         console.log("getting data from database");
//     },1000);
//     console.log("end");
// }
// getAllDataFromDB(function(data){
//     console.log("data",data);
// });


// promise // asychonous
const getAlldataFromDB = new Promise((resolve,reject) => {
    setTimeout(()=>{
        var database = ["Ha Noi","Ho chi Minh","Da Nang"];
        reject(new Error("Da xay ra loi!!!"));
        console.log("Getting data from database");
    },3000);
});
getAlldataFromDB.then((data)=>console.log("data",data)).catch(err=>console.log(err));