import javax.swing.JOptionPane;

public class MeusDados3 {

	public static void main(String[] args) {
		int numero_chamada, idade;
		String nome, sobrenome, endereco;
		float altura, peso;

		nome = JOptionPane.showInputDialog(
			"Digite o nome do aluno: "
		);
		
		peso = Float.parseFloat(JOptionPane.showInputDialog(
			"Digite o peso do aluno: "
		));

		altura = Float.parseFloat(JOptionPane.showInputDialog(
			"Digite a altura do aluno: "
		));

		idade = Integer.parseInt(JOptionPane.showInputDialog(
			"Digite a idade do aluno: "
		));	
		
		JOptionPane.showMessageDialog(null, "Meus dados: \n" +
		"\nNome: " + nome +
		"\nPeso: " + peso +
		"\nAltura: " + altura +
		"\nIdade: " + idade);		
	}

}