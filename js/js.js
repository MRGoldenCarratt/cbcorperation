
 var a = document.cookie;
  var name = a;
  console.log(name);
  if (name === ""){
    var name = prompt("what is your name");
console.log("name set to " , name);
    document.cookie = name ; "expires=Thu, 19 Nov 2020 12:00:01 UTC; path=https://cbcorperation.github.io/cbcorperation";
  }

  document.write("hello " , name);
