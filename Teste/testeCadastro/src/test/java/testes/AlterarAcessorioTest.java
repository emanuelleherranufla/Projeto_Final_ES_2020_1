package testes;

import org.junit.Assert;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class AlterarAcessorioTest {
    @Test
    public void testAlterarAcessorio(){
        System.setProperty("webdriver.chrome.driver", "C:\\drivers\\chromedriver.exe");
        WebDriver navegador = new ChromeDriver();

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/view/login.html");

        navegador.findElement(By.name("email")).sendKeys("emanuelleteste@teste.com");
        navegador.findElement(By.name("senha")).sendKeys("123456");

        navegador.findElement(By.name("entrar")).click();

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/view/gerenciar-produtos.html");

        navegador.get("http://localhost:8080/Projeto_Final_ES_2020_1/src/view/alterar-acessorio.html");

        navegador.findElement(By.name("codigo")).sendKeys("4");

        navegador.findElement(By.name("pesquisar")).click();

        navegador.findElement(By.name("nome")).sendKeys("Colar preto ALTERADO");
        navegador.findElement(By.name("cor")).sendKeys("Dourado");
        navegador.findElement(By.name("marca")).sendKeys("Jubs");

        navegador.findElement(By.name("salvar")).click();

        String tituloPagina = navegador.findElement(By.className("titulo-pagina")).getText();

        Assert.assertEquals("Gerenciar produtos", tituloPagina);

        navegador.quit();
    }

}
