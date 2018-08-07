#include <stdio.h>

int main() {

	char operazeichen, plus = '+', minus = '-', mal = '*', durch = '/';
	float zahl1, zahl2;
	float addi;
	float subbi;
	float multi;
	float divi;

	printf("\nBitte geben Sie eine Zahl ein:\n");
	while(scanf("%f", &zahl1) != 1){
		printf("Bitte geben Sie eine ZAHL ein, kein anderes Zeichen: ");
		while(getchar() != '\n');
	};
	getchar();

	printf("\nBitte geben Sie das Operationszeichen ein. +, -, * oder /\n");
	scanf("%c", &operazeichen);

	printf("\nBitte geben Sie eine zweite Zahl ein: ");
	while(scanf("%f", &zahl2) != 1 ){
		printf("Bitte geben Sie eine zweite ZAHL ein, kein anderes Zeichen: ");
		while(getchar() != '\n');
	};
	getchar();

	addi = zahl1 + zahl2;
	subbi = zahl1 - zahl2;
	multi = zahl1 * zahl2;
	divi = zahl1 / zahl2;

	if (operazeichen == plus){
		printf("Das Ergebnis ist %f\n\n", addi);
	}
	else if (operazeichen == minus){
		printf("Das Ergebnis ist %f\n\n", subbi);
	}
	else if (operazeichen == mal){
		printf("Das Ergebnis ist %f\n\n", multi);
	}
	else if (operazeichen == durch){
		printf("Das Ergebnis ist %f\n\n", divi);
	}
	else {
		printf("Fehler\n");
	}

	return 0;
}
