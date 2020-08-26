package testes;

import org.junit.Assert;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class LoginTest {
    @Test
    public void testLogin(){
        System.setProperty("webdriver.chrome.driver", "C:\\drivers\\chromedriver.exe");
        WebDriver navegador = new ChromeDriver();

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/index.html");

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/view/login.html");

        navegador.findElement(By.name("email")).sendKeys("emanuelleteste@teste.com");
        navegador.findElement(By.name("senha")).sendKeys("123456");

        navegador.findElement(By.name("entrar")).click();

        String saudacao = navegador.findElement(By.className("nome-usuario")).getText();

        Assert.assertEquals("Olá,\nseja bem-vindo!", saudacao);

        navegador.quit();
    }
}
