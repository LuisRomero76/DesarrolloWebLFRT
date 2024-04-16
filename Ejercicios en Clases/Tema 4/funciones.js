function factorial(n) {
    if (n == 0) {
        return 1;
    }else {
        return n * factorial(n - 1);
    }
}

function fibonacci(n) {
    var a = 0;
    var b = 1;
    var r = 0;
    for (var i = 0; i < n; i++) {
        r = a + b;
        a = b;
        b = r;
    }
    return r;
};