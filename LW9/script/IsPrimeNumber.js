function isPrimeNumber(value) {
    if (typeof value === 'number') {
        isSinglePrime(value); 
    } else if (Array.isArray(value)) {
        for (let i = 0; i < value.length; i++) { 
            if (typeof value[i] === 'number') {
                isSinglePrime(value[i]);
            } else {
                console.log(value[i] + ' is not a number');
            }
        }
    } else {
        console.log(value + ' is not a number, neither an array');
    }
  
    function isSinglePrime(num) {
        let isPrime = true;
        if (!Number.isInteger(num) || num <= 1) {
            isPrime = false;
        } 
        for (let i = 2; i < num && isPrime; i++) {
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
}