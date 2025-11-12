<?php 
include "includes/menu.php";
?>

<div class="hero">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="productbox">
                <div class="productbox__main fade">
                    <div class="productbox__main__head">Deep Spinks</div>
                    <div class="productbox__main__base">
                        Prémiový doplněk stravy pro hlubší, klidnější spánek. Kombinuje přírodní vitaminy, minerály a rostlinné extrakty (např. hořčík, melatonin, L-theanin a extrakt z meduňky), které podporují uvolnění těla i mysli. Pomáhá snadněji usnout, zlepšuje kvalitu spánku a ráno se probouzíte odpočatí a svěží.
                    </div>
                </div>
                <div class="productbox__main fade">
                    <img class="deep" src="images/deep.png" alt="">
                </div>
            </div>
            <img class="background" src="images/background3.png" alt="">
        </div>

        <div class="mySlides fade">
            <div class="productbox">
                <div class="productbox__main fade">
                    <div class="productbox__main__head">Vitamins + Zinc</div>
                    <div class="productbox__main__base">
                        Komplexní doplněk stravy ve formě kapslí, který kombinuje široké spektrum základních vitamínů s důležitým minerálem zinkem. Podporuje imunitní systém, přirozenou vitalitu a celkovou pohodu. Díky vyváženému složení je ideální pro každodenní užívání a přispívá k udržení zdravé pokožky, vlasů i nehtů.
                    </div>
                </div>
                <div class="productbox__main fade">
                    <img class="vitamin" src="images/vitamin.png" alt="">
                </div>
            </div>
            <img class="background" src="images/background1.png" alt="">
        </div>

        <div class="mySlides fade">
            <div class="productbox">
                <div class="productbox__main fade">
                    <div class="productbox__main__head">PrimTesto</div>
                    <div class="productbox__main__base">
                        Přírodní doplněk stravy ve formě kapslí určený pro muže, kteří chtějí podpořit přirozenou tvorbu testosteronu, zvýšit energii a zlepšit fyzickou výkonnost. Spojuje sílu přírodních extraktů inspirovaných lesní vitalitou do moderní formule pro sílu, výkon a sebevědomí.
                    </div>
                </div>
                <div class="productbox__main fade">
                    <img class="test" src="images/test.png" alt="">
                </div>
            </div>
            <img class="background" src="images/background2.png" alt="">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

<div class="box">
    <div class="box__product">
        <div class="box__product__photo1">
            <img src="images/deep.png" alt="">
        </div>
        <div class="box__product__text">
            <div class="box__product__text__head">Deep Spinks</div>
            <div class="box__product__text__base">
                <p>Deep Spinks je přírodní doplněk stravy ve formě kapslí, který podporuje klidný a kvalitní spánek.</p>
                <p>Každá kapsle obsahuje pečlivě vybrané vitaminy, minerály a rostlinné extrakty, jako je hořčík, melatonin, L-theanin a meduňka, které pomáhají uvolnit tělo i mysl a zkrátit dobu usínání.</p>
                <p>Produkt je vhodný pro dospělé, kteří se potýkají s nespavostí, častým probouzením nebo pocitem nedostatečného odpočinku.</p>
                <p>Pravidelné užívání Deep Spinks přispívá k hlubšímu a regenerativnímu spánku, díky čemuž se ráno probouzíte svěží a plní energie.</p>
            </div>
        </div>
    </div>

    <div class="box__product">
        <div class="box__product__text">
            <div class="box__product__text__head">Vitamins + Zinc</div>
            <div class="box__product__text__base">
                <p>Vitamins + Zinc je pečlivě vyvážený doplněk stravy ve formě kapslí, který poskytuje tělu široké spektrum základních vitamínů spolu s důležitým minerálem zinkem.</p>
                <p>Tento produkt byl navržen tak, aby podporoval imunitní systém, přirozenou vitalitu a celkovou pohodu, a je ideální pro každodenní užívání.</p>
                <p>Každá kapsle obsahuje kombinaci vitaminů, které jsou nezbytné pro správnou funkci organismu, včetně vitamínů skupiny B, vitaminu C a vitaminu D.</p>
                <p>Zinek, který je součástí složení, přispívá k normální funkci imunitního systému, podporuje zdravou pokožku, vlasy i nehty a hraje klíčovou roli při ochraně buněk před oxidativním stresem.</p>
            </div>
        </div>
        <div class="box__product__photo2">
            <img src="images/vitamin.png" alt="">
        </div>
    </div>

    <div class="box__product">
        <div class="box__product__photo3">
            <img src="images/test.png" alt="">
        </div>
        <div class="box__product__text">
            <div class="box__product__text__head">PrimTesto</div>
            <div class="box__product__text__base">
                <p>PrimTesto je prémiový doplněk stravy ve formě kapslí určený pro muže, kteří chtějí přirozeně podpořit tvorbu testosteronu, zvýšit energii a zlepšit fyzickou výkonnost.</p>
                <p>Každá kapsle obsahuje pečlivě vybrané přírodní extrakty, které společně přispívají k optimalizaci hormonální rovnováhy, posílení svalové síly a celkové vitality.</p>
                <p>Mezi hlavní složky produktu patří bylinky a vitaminy tradičně využívané k podpoře mužského zdraví, například Tribulus terrestris, maca, zinek a vitaminy skupiny B.</p>
                <p>Tyto složky přispívají k podpoře přirozené tvorby testosteronu, zvyšují energii během dne, podporují regeneraci po fyzické zátěži a napomáhají udržení svalové hmoty.</p>
            </div>
        </div>
    </div>
</div>

<?php 
include "includes/footer.php";
?>