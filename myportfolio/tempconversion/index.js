/*let x= document.getElementById("fromType").value;
let y= document.getElementById("toType").value;*/

let Temperature = document.getElementById("mySubmit");
     
     let output =  document.getElementById("Para");

Temperature.addEventListener("click", function (event) {
    event.preventDefault();  // Prevent form submission

    let x= document.getElementById("fromType").value; 
    let y= document.getElementById("toType").value;

    let input = Number(document.getElementById("tempBox").value);
    console.log(input);

if(x=="Fahrenheit" && y=="Celsius"){
    let out = (input - 32) * (5/9);
    let result = out.toFixed(2);
    output.textContent= `Result: ${result} °C`;
}
else if(x=="Celsius" && y=="Fahrenheit"){  
    let out = (input * (9/5)) + 32;
    let result = out.toFixed(2);
    output.textContent= `Result: ${result} °F`;
    }
else if(x=="Kelvin" && y=="Celsius"){
    let out = (input - 273 );
    let result = out.toFixed(2);
    output.textContent= `Result: ${result} °C`;
}
else if(x=="Celsius" && y=="Kelvin"){
    let out = (input + 273 );
    let result = out.toFixed(2);
    output.textContent= `Result: ${result} K`;
}
else if(x=="Fahrenheit" && y=="Kelvin"){
    let out = ((input -32 )*(5/9))+273   ;
    let result = out.toFixed(2);
    output.textContent= `Result: ${result} K`;
}    
else if(x=="Kelvin" && y=="Fahrenheit"){
    let out = (((input - 273 )*(9/5))+ 32)   ;
    let result = out.toFixed(2);
    output.textContent= `Result: ${result} °F`;
}
});
