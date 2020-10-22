let calculator = {}

calculator.suma = (x,y) => {
    return x+y;
}

calculator.resta = (x,y) => {
    return x-y;
}

calculator.producto = (x,y) => {
    return x*y;
}

calculator.division = (x,y) => {
    try {
        if (y != 0 ) return x/y;
        throw error;
    } catch (error) {
        return error;
    }
}

module.exports = calculator;