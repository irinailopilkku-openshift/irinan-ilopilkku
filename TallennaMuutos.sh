echo.
echo "Tallenna muutokset paikalliseen kantaan."
echo.
echo "Kun muutkset on tallennettu, niin ne ovat valmiit lähetettäväksi palvelimelle"


echo.
echo.
read -p "Paina [Enter] : Listaa muutokset"
echo.
echo.
echo "Alla olevat muutokset ovat tallentumassa."
echo.
echo.

git add .
git commit -a --dry-run

echo.
echo "^^"
echo "Yllä olevat muutokset ovat tallentumassa."

echo.
echo.
read -p "Paina [Enter] : Tallenna muutokset ..."

echo.
echo.
echo "Tallennetaan muutokset"
echo.
git commit -a -m "."

echo.
read -p "Paina [Enter] : Sulja ikkuna."
