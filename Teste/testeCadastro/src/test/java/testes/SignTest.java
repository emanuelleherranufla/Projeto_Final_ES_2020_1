package testes;

import org.junit.Assert;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class SignTest {
    @Test
    public void testFazerCadastro(){
        System.setProperty("webdriver.chrome.driver", "C:\\drivers\\chromedriver.exe");
        WebDriver navegador = new ChromeDriver();

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/index.html");

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/view/cadastro.html");

        navegador.findElement(By.name("nome")).sendKeys("Emanuelle Teste 2");
        navegador.findElement(By.name("email")).sendKeys("emanuelleteste@teste.com");
        navegador.findElement(By.name("senha")).sendKeys("123456");
        navegador.findElement(By.name("cpf")).sendKeys("10148853687");
        navegador.findElement(By.name("rua")).sendKeys("Rua das palmeiras");
        navegador.findElement(By.name("bairro")).sendKeys("Jardins");
        navegador.findElement(By.name("numero")).sendKeys("330");
        navegador.findElement(By.name("cidade")).sendKeys("Lavras");
        navegador.findElement(By.name("estado")).sendKeys("MG");

        navegador.findElement(By.name("finalizar")).click();

        String tituloPagina = navegador.findElement(By.className("titulo-pagina")).getText();

        Assert.assertEquals("Acessar minha conta", tituloPagina);

        navegador.quit();
    }

}
