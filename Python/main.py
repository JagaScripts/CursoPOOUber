from car import Car
from account import Account
from json.tool import main
from socket import if_nameindex


if __name__ == "__main__":
    print("Hola Mundo")

    car = Car("AMQ123", Account("Andres Herrera","ANDA876"))
    print(vars(car))
    print(vars(car.driver))

    '''Antes de añadir __init__
    car = Car()
    car.license = "AMQ123";
    car.driver = "Andres Herrera";
    car.passenger = 4; 
    print(vars(car))

    car1 = Car();
    car1.license = "QWE567";
    car1.driver = "Andrea Herrera";
    car1.passenger = 3;
    print(vars(car1))
    '''