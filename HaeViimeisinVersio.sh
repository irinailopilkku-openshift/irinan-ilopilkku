echo.
echo "Tallenna muutokset paikalliseen kantaan."

read -p "Paina [Enter] : Tallenna muutokset ..."
echo "Tallennetaan muutokset"
echo.
#git commit -a --dry-run
git pull origin master

echo.
read -p "Paina [Enter] : Sulja ikkuna."
