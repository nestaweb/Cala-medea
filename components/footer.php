<footer>
            <h2 class="titleSection">A propos : </h2>
            <div id="sectionsFooter">
                <div class="sectionFooter">
                    <h3 class="titleSectionFooter">Naviguer </h3>
                    <div class="linksFooter">
                        <a href="./index.php#details" class="link">
                            <p>Details</p>
                        </a>
                        <a href="./index.php#reservationandcontact" class="link">
                            <p>Reservation</p>
                        </a>
                        <a href="./index.php#advices" class="link">
                            <p>Avis</p>
                        </a>
                        <a onclick="showPhotos()" class="link">
                            <p>Photos</p>
                        </a>
                    </div>
                </div>
                <div class="sectionFooter leaveAdvice">
                    <h3 class="titleSectionFooter">Votre avis nous interesse</h3>
                    <form action="./backend/leaveAdvice.php" method="post">
                        <input type="text" name="firstName" placeholder="Nom" autocomplete="off">
                        <input type="text" name="lastName" placeholder="Prénom" autocomplete="off">
                        <textarea name="advice" cols="30" rows="10" style="resize:none" placeholder="Votre message"></textarea>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <div id="copyrights">
                <a class="copyright link" href="http://www.xtsen.me">xtsen.me</a>
            </div>
        </footer>