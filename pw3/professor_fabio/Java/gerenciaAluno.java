import javax.swing.JOptionPane;

public class gerenciaAluno {
    aluno al = new aluno();

    public void CadastrarAluno() {
        al.setNome(
                JOptionPane.showInputDialog(
                    "Digite o nome do aluno: "));
        
        al.setAltura(
            JOptionPane.showInputDialog(
                "Digite a altura do aluno: "));
    }

    public void MostrarAluno() {
        JOptionPane.showMessageDialog(null, 
            "O nome do aluno é : " + al.getNome());
        
        JOptionPane.showMessageDialog(null, 
            "A altura do aluno é : " + al.getAltura());
    }
}
