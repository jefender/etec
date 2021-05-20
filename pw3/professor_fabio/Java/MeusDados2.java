import java.util.Scanner;

public class MeusDados2 {

	public static void main(String[] args) {
		int numero_chamada, idade;
		String nome, sobrenome, endereco;
		float altura, peso;

		Scanner scan = new Scanner(System.in);
		
		System.out.print("Digite o nome do aluno: ");
		nome = scan.nextLine();

		System.out.print("Digite o peso do aluno: ");
		peso = scan.nextFloat();

		System.out.print("Digite a altura do aluno: ");
		altura = scan.nextFloat();

		System.out.print("Digite a idade do aluno: ");
		idade = scan.nextInt();
		
		System.out.println("Boa Noite");
		System.out.println("Meus dados: ");
		System.out.println("Nome: " + nome);
		System.out.println("Peso: " + peso);
		System.out.println("Altura: " + altura);
		System.out.println("Idade: " + idade);		
	}

}