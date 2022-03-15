Zadanie NBP 
Napisz serwis udostępniający obliczony średni kurs kupna na podstawie danych z NBP. Pobierane dane z NBP to: kurs kupna. Kod wrzucić do repozytorium. 
Endpoint 
GET /{currency}/{startDate}/{endDate}/ 
● Supported currencies: USD, EUR, CHF, GBP 
● startDate, endDate: format RRRRMMYY 
Informacje i wskazówki 
● niezbędne informacje do pobierania danych z NBP na stronie: 
○ http://www.nbp.pl/home.aspx?f=/kursy/instrukcja_pobierania_kursow_walut.html 
○ http://api.nbp.pl/ 
● kursy z daty początkowej i końcowej również mają być brane pod uwagę 
Przyklad 
GET /EUR/2013-01-28/2013-01-31/ 
Response: 
{ 
“average_price”: 4,1505 
}

TODO: obsluga wyjatkow(walidator?) testy jednostkowe dopisać
