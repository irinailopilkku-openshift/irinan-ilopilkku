echo.
echo "Hae viimeisin versio palvelimelta."

read -p "Paina [Enter] : Hae versio ..."
echo "Haetaan viimeisin versio."
echo.
#git commit -a --dry-run
git pull origin master

echo.
read -p "Paina [Enter] : Sulja ikkuna."
