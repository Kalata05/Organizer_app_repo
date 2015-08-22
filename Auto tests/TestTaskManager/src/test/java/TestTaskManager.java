/**
 * Created by kaloianmateev on 8/22/15.
 */

import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;

import java.util.NoSuchElementException;
import java.util.concurrent.TimeUnit;

public class TestTaskManager {


    private WebDriver driver;


    @Before
    public void setUp(){

        driver = new FirefoxDriver();
        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);


    }



    @Test
    public void Test_LoginValid(){

        driver.get("http://idkname.comoj.com/Task_manager/index.php");
        driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);

        String validUsername = "poten";
        String validPassword = "poten";

        WebElement usernameField = driver.findElement(By.id("username"));
        WebElement passwordField = driver.findElement(By.id("loginPassword"));
        WebElement loginbutton  = driver.findElement(By.id("loginButton"));
        usernameField.clear();
        passwordField.clear();

        usernameField.sendKeys(validUsername);
        passwordField.sendKeys(validPassword);

        loginbutton.click();

        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);



        try{

            WebElement logout = driver.findElement(By.id("log_out"));
            System.out.println("login");

        }
        catch(NoSuchElementException e){
            System.out.println("couldn't login");
        }

        // assertEquals(driver.getCurrentUrl().toString(),"http://idkname.comoj.com/Task_manager/profile.php" );


        // assertEquals(

        //        "Kaloian Mateev",
        //        fullname.getText()



        //);






    }


    @After
    public void tearDown(){


    }

    @Test
    public void TestRegisterCorrectly(){

        //Login

        // this.Test_LoginValid_ShouldLoginCorrectly();

        driver.get("http://idkname.comoj.com/Task_manager/index.php");
        driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);


        WebElement registerLink = driver.findElement(By.linkText("Register"));

        registerLink.click();
        driver.manage().timeouts().implicitlyWait(15, TimeUnit.SECONDS);

        WebElement email = driver.findElement(By.id("email"));

        WebElement username = driver.findElement(By.id("username"));

        WebElement password = driver.findElement(By.id("password"));

        WebElement password_repeat = driver.findElement(By.id("password_r"));

        WebElement register_button = driver.findElement(By.id("register_button"));

        email.clear();
        email.sendKeys("niko@abv.bg");

        username.clear();
        username.sendKeys("niko");

        password.clear();
        password.sendKeys("niko");

        password_repeat.clear();
        password_repeat.sendKeys("anita");

        register_button.click();





    }

    @Test
    public void TestFailedLogin(){


    }

    @Test
    public void TestCreateFailedTask(){


        this.Test_LoginValid();

        driver.manage().timeouts().implicitlyWait(15, TimeUnit.SECONDS);

        try {

            WebElement taskName = driver.findElement(By.id("taskName"));
            WebElement taskDate = driver.findElement(By.id("taskDate"));
            WebElement taskTime1 = driver.findElement(By.id("taskTime1"));
            WebElement taskTime2 = driver.findElement(By.id("taskTime2"));
            WebElement date = driver.findElement(By.linkText("10"));
            WebElement createTaskButton = driver.findElement(By.id("create"));

            taskName.clear();
            taskName.sendKeys("Test task from Java.");
            taskDate.clear();
            taskDate.click();
            date.click();
            taskTime1.clear();
            taskTime1.sendKeys("16");
            taskTime2.sendKeys("30");
            createTaskButton.click();
        }catch(NoSuchElementException e){

            System.out.println(e);
        }



    }




}
