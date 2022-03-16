package CursoPOOUber.Java;

/**
 * Main
 */
public class Main {
    public static void main(String[] args) {
       System.out.println("Hola mundo");
       Car car = new Car("AMQ123", new Account("Andres Herrera","AND123"));
       car.passenger = 4;
       car.printDataCar();

       Car car1 = new Car("QWE567", new Account("Andrea Herrera","ANDA876"));
       car1.passenger = 3;
       car1.printDataCar();
    }
    
}