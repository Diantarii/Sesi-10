<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>
    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio"  id="jk" name="txJK" value="L">Laki-laki
            <input type="radio"  id="jk" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN"  id="jurusan">
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
            <input type="checkbox"  id="txhobby" name="musik">Musik
            <input type="checkbox"  id="txhobby" name="tari">Tari
            <input type="checkbox"  id="txhobby" name="tidur">Tidur
            <input type="checkbox"  id="txhobby" name="joging">Joging
            <input type="checkbox"  id="txhobby" name="lari">Lari
        </div>


        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script>
        function checkform(){
            let f = document.getElementsById("Latihan02").elements;
            let nim = f.nim.value;
            let nama=f.nama.value;
            let jk=f.jk.value;
            let jrs=f.jurusan.value;
            let hobby_musik=f.txhobby[0].checked;
            let hobby_tari=f.txhobby[1].richecked;
            let hobby_tidur=f.txhobby[2].checked;
            let hobby_joging=f.txhobby[3].checked;
            let hobby_lari=f.txhobby[4].checked;


            console.log("NIM : "+nim)
            console.log("Nama : "+nama)
            console.log("Jenis Kelamin : "+jk)
            console.log("Jurusan : "+jurusan)
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