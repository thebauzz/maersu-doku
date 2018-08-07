#include <iostream>
#include <string>

using namespace std;

/* deklarieren aller Zahlen */
int zahl;
char eingabe;
string eins   = "1";
string zwei   = "2";
string drei   = "3";
string vier   = "4";
string fuenf  = "5";
string sechs  = "6";
string sieben = "7";
string acht   = "8";
string neun   = "9";
string icks   = "X";

/* deklaration für die kästchen um die Zahlen herum */
string top        =" _________________ \n";
string btween     ="|     |     |     |\n";
string bottom     ="|_____|_____|_____|\n";
string teillinks  ="|  ";
string teilrechts ="  |";
string teilmitte  ="  ";

int main(){

/* Zeichne das ganze Kästchen mit den 9 Zahlen */
	cout << top ;
	cout << btween;
	cout << teillinks << eins << teilrechts <<
					teilmitte << zwei << teilmitte  <<
					teillinks << drei << teilrechts << endl;
	cout << bottom;
	cout << btween;
	cout << teillinks << vier  << teilrechts <<
					teilmitte << fuenf << teilmitte  <<
					teillinks << sechs << teilrechts << endl;
	cout << bottom;
	cout << btween;
	cout << teillinks << sieben << teilrechts <<
					teilmitte << acht   << teilmitte  <<
					teillinks << neun   << teilrechts << endl;
	cout << bottom << "\n\n";

/* Zahleneingabe anfordern - if not 1-9 beginnt die Aufforderung noch einmal */
	anfang:
	cout << "Bitte tippen Sie ein Zahl ein zwischen 1 und 9 ein: \n";
	cin >> zahl;
	getchar();
	if (zahl != 1 && zahl != 2 && zahl != 3
	    && zahl != 4 && zahl != 5 && zahl != 6
			&& zahl != 7 && zahl != 8 && zahl != 9){
		goto anfang;
	}

/* Je nach dem welche Nummer eingegeben wurde, ersetze den Wert von dieser Variablen zum "X" */
	switch(zahl) {
		case 1 :   eins.replace(0,1, icks); break;
		case 2 :   zwei.replace(0,1, icks); break;
		case 3 :   drei.replace(0,1, icks); break;
		case 4 :   vier.replace(0,1, icks); break;
		case 5 :  fuenf.replace(0,1, icks); break;
		case 6 :  sechs.replace(0,1, icks); break;
		case 7 : sieben.replace(0,1, icks); break;
		case 8 :   acht.replace(0,1, icks); break;
		case 9 :   neun.replace(0,1, icks); break;
		default: goto anfang;
	}

/* Zeichne das Kästchen neu (mit allen X) */
	cout << top ;
	cout << btween;
	cout << teillinks << eins << teilrechts <<
					teilmitte << zwei << teilmitte  <<
					teillinks << drei << teilrechts << endl;
	cout << bottom;
	cout << btween;
	cout << teillinks << vier  << teilrechts <<
					teilmitte << fuenf << teilmitte  <<
					teillinks << sechs << teilrechts << endl;
	cout << bottom;
	cout << btween;
	cout << teillinks << sieben << teilrechts <<
					teilmitte << acht   << teilmitte  <<
					teillinks << neun   << teilrechts << endl;
	cout << bottom << "\n\n";

/* Eingabe = j oder J -> Neu beginnen --- Eingabe = n oder N -> Programm beenden */
  jaodernei:
	cout << "\nWollen Sie eine weitere Nummer eingeben?(J/N)\n";
	cin  >> eingabe;

	if (eingabe == 'J' || eingabe == 'j'){
		cout << "\n---------------------------------------------------------------------\n";
		goto anfang;
	}
	else if (eingabe == 'N' || eingabe == 'n'){
		return 0;
	}
	else {
		goto jaodernei;
	}
	return 0;
}
