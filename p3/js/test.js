let text = '{' +
'"cart":[{"Pepsi":2}]' +
'}';

const jsonobj = JSON.parse(text);
console.log(jsonobj);
