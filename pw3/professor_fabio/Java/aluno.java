public class aluno {

		private int ra, numero_chamada;
		private String nome, sobrenome;
		private float altura, peso;

		public String getNome() {
			return nome;
		}

		public String getSobrenome() {
			return sobrenome;
		}

		public int getRa() {
			return ra;
		}

		public int getNumero_chamada() {
			return numero_chamada;
		}

		public float getAltura() {
			return altura;
		}

		public float getPeso() {
			return peso;
		}

		public void setNome(String nome) {
			this.nome = nome;
		}

		public void setRa(int ra) {
			this.ra = ra;
		}		

		public void setAltura(float altura) {
			this.altura = altura;
		}
}