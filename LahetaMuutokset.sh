echo.
echo "Lähetä muutokset palvelimelle."

read -p "Paina [Enter] : Lähetä ..."
echo "Lähetetään muutokset palvelimelle."
echo.
#git commit -a --dry-run
git push origin HEAD

echo.
read -p "Paina [Enter] : Sulja ikkuna."
