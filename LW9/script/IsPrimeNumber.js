function isPrimeNumber(value) {
    if (typeof value === 'number') {
        isPrime(value); 
    } else if (Array.isArray(value)) {
        if (value.length === 0){
            console.log("Array empty")
        }
        for (let i = 0; i < value.length; i++) { 
            if (typeof value[i] === 'number') {
                isPrime(value[i]);
            } else {
                console.log(value[i] + ' is not a number');
            }
        }
    } else {
        console.log(value + ' is not a number, neither an array');
    } 

}

function isPrime(num) {
    if ((num === 0) || (num === 1)) {
        console.log(num + ' is not a prime number');
        return;
    }
    let isPrime = true;
    for (let i = 2; i < num; i++) {
        if (num % i === 0) {
            isPrime = false;
            break;
        }
    }
    if (isPrime) {
        console.log(num + ' is a prime number');
    } else {
        console.log(num + ' is not a prime number');
    }
}