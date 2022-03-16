package CursoPOOUber.Java;

/**
 * Main
 */
public class Main {
    public static void main(String[] args) {
       System.out.println("Hola mundo");
       Car car = new Car();
       car.license = "AMQ123";
       car.driver = "Andres Herrera";
       car.passenger = 4;
       car.printDataCar();

       Car car1 = new Car();
       car1.license = "QWE567";
       car1.driver = "Andrea Herrera";
       car1.passenger = 3;
       car1.printDataCar();
    }
    
}