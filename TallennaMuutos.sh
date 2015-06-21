echo.
echo "Tallenna muutokset paikalliseen kantaan."

read -p "Paina [Enter] : Tallenna muutokset ..."
echo "Tallennetaan muutokset"
echo.
#git commit -a --dry-run
git commit -a -m "."

echo.
read -p "Paina [Enter] : Sulja ikkuna."
