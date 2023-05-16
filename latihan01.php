<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
                <option value="KAB">TI-KAB</option>
                <option value="MTI">TI-MTI</option>
                <option value="PAR">TI-PAR</option>
                <option value="DGM">TI-DGM</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SK">Siatem Komputer</option>
                <option value="BD">Bisnis Digital</option>
            </select>
        </div>
        <div>
            Hobby
            <input type="checkbox" name="musik">Musik
            <input type="checkbox" name="tari">Tari
            <input type="checkbox" name="tidur">Tidur
            <input type="checkbox" name="joging">Joging
            <input type="checkbox" name="lari">Lari
        </div>


        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama=f.namedItem("txNAMA").value;
            let jk=f.namedItem("txJK").value;
            let jrs=f.namedItem("txJURUSAN").value;
            let hobby_musik=f.namedItem("musik").checked;
            let hobby_tari=f.namedItem("tari").checked;
            let hobby_tidur=f.namedItem("tidur").checked;
            let hobby_joging=f.namedItem("joging").checked;
            let hobby_lari=f.namedItem("lari").checked;


            console.log("NIM : "+nim)
            console.log("Nama : "+nama)
            console.log("Jenis Kelamin : "+jk)
            console.log("Jurusan : "+jrs)
            console.log("Musik : "+hobby_musik)
            console.log("Tari : "+hobby_tari)
            console.log("Tidur : "+hobby_tidur)
            console.log("Joging : "+hobby_joging)
            console.log("Lari : "+hobby_lari)
            return false;
        }
    </script>
</body>
</html>