<h1>Kandidatopgave</h1>

<p>Følgende opgavesæt indeholder opgaver i forbindelse med ansættelse hos Gorm Larsen Nordic, Denmark.
Det ses gerne, at alle opgaverne løses forinden jobsamtalen og uploades til dette Git repository i hver deres folder.
Kan dele af opgaverne ikke løses fx pga. tidsmangel, så ser vi gerne, at der som minimum er vedlagt en skriftlig forklaring af,
hvordan kandidaten havde tænkt sig at løse opgaven.</p>

<h3>Forventet værktøjer til løsning af opgaverne:</h3>
<p>PHP 7.2, Mysql / MariaDB, Bootstrap 4 samt standard HTML5, CSS og Javascript.</p>

<h3>Formål med opgaverne:</h3>
<p>At demonstrere almen kendskab til PHP, Mysql, Bootstrap 4 samt anvendelse af objektorienteret programmering.</p>

<h3>Estimeret tid til løsning af opgaverne:</h3>
<p>2-3 timer</p>

---

<h3>Opgave 1</h3>

<p>Givet er tallisten:</p>

<pre>$list = [1,6,3,5,null,4,4,7,1,2,null,8,3];</pre>

<p>Lav en funktion, der fjerner null elementer, sorterer listen i stigende orden og returnerer de første 4 unikke elementer.</p>

---

<h3>Opgave 2</h3>

<p>Givet er array'et:</p>

<pre>
$employees = [
	['id'=>1, 'name' => 'Ole', 'age'=>'45'],
	['id'=>2, 'name' => 'Sanne', 'age'=>'28'],
	['id'=>3, 'name' => 'Hans', 'age'=>'34'],
	['id'=>4, 'name' => 'Marie', 'age'=>'23']
];
</pre>

<p>Lav en funktion, der sorterer <i>$employees</i>, så elementerne (de ansatte) står sorteret i stigende orden ift. deres alder.</p>

---

<h3>Opgave 3</h3>

<p>Givet er klassen <i>Employee</i>, som findes i rodden af repositoriet (Employee.php).</p>

<p>Opret en ny klasse, <i>Consultant</i>, der nedarver egenskaberne fra <i>Employee</i>, og som har en <i>salary_rate</i> på 300. Desuden skal følgende to regler implementeres i <i>Consultant</i>:</p>

<ol>
<li>Der skal fratrækkes 8% i arbejdsmarkedsbidrag, når salary beregnes.</li>
<li>Ved beregning af salary skal for hver time tillægges <i>$expenses_per_hour</i> defineret i <i>Employee</i>.</li>
</ol>

<i>Test: En salary beregning på 5 timer for en Consultant skal give: 5*(300*0,92+10) = 1430</i>

---

<h3>Opgave 4</h3>

<p>Givet er databasetabellerne:</p>

<p><u>employees</u></p>
<pre>
---------------------------------------------
id | name  | age | type        | salary_rate
---------------------------------------------
1  | Ole   | 45  | fieldforce  | 200
2  | Sanne | 28  | consultant  | 300
3  | Hans  | 34  | consultant  | 300
4  | Marie | 23  | fieldforce  | 200
---------------------------------------------
</pre>

<p><u>work_registrations</u></p>
<pre>
----------------------------------------------
id | employee_id  | date       |  worked_hours
----------------------------------------------
13 | 1   	  | 2020-03-02 |  5
12 | 2 	  	  | 2020-03-02 |  6
11 | 3  	  | 2020-03-02 |  7
10 | 4 	  	  | 2020-03-02 |  5
9  | 1   	  | 2020-03-01 |  2
8  | 1   	  | 2020-02-02 |  5
7  | 3  	  | 2020-02-04 |  7
6  | 4 	  	  | 2020-02-02 |  4
5  | 1   	  | 2020-01-04 |  5
4  | 2 	  	  | 2020-01-02 |  1
3  | 3  	  | 2020-01-02 |  7
2  | 1   	  | 2019-12-12 |  2
1  | 2 	  	  | 2019-12-13 |  6
----------------------------------------------
</pre>

<ol>
<li>Lav en SQL, der trækker summen af <i>worked_hours</i> ud for hver <i>employee</i> fra marts 2020.</li>
<li>Lav en SQL, der for hver <i>employee</i> viser [name, date, worked_hours] for den dag, der er arbejdet færrest timer.</li>
</ol>

---

<h3>Opgave 5</h3>

<p>I denne opgave forventes en reel fullstack løsning med et pænt og mobilresponsivt design. Databasen skal vedlægges som en mysqldump-fil med både struktur og indhold.</p>

<ol>
<li>Med udgangspunkt i opgave 3 og 4, opret en side i Bootstrap 4, der via en database henter listen af <i>employees</i> og de dertil hørende kolonner. Listen skal vises i en stripped tabel.</li>
<li>
  For hver række skal i yderste kolonne til højre være en knap, <i>Show</i>, der linker til en underside, hvor pågældende <i>employee</i> vises med følgende informationer:
  <ul>
   <li>Navn, alder, type og salary_rate</li>
   <li>En liste over de seneste 3 måneders arbejdsregistrering fra tabellen <i>work_registrations</i></li>
   <li>En opsummeret salary ift. den seneste måneds arbejdsregistrering beregnet ud fra metoden <i>calculate_salary</i> jf. opgave 3. I den forbindelse skal det bemærkes, at en type <i>fieldforce</i> beregnes udfra <i>Employee</i> klassen dvs. uden arbejdsmarkedsbidrag og tillæg af <i>expenses_per_hour</i>.</li>
   </ul>
</li>
</ol>
