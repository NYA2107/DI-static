const beritaData = [
    {
        id:'berita1',
        img:'img/berita1.jpg',
        judul:'Mahasiswa Demo Terus',
        deskripsi:'UNS – Universitas Sebelas Maret (UNS) Surakarta hosted the 2018 Inter-Higher Education Pencak Silat Championship (Perti) held seven days since'
    },
    {
        id:'berita2',
        img:'img/berita2.jpg',
        judul:'Gedung Baru UNS',
        deskripsi:'UNS – Universitas Sebelas Maret (UNS) Surakarta won the Indonesian National Standard (SNI) Award from the National Standardization Agency (BSN) for '
    },
    {
        id:'berita2',
        img:'img/berita3.jpg',
        judul:'Mahasiswa Baru Kok Gini SIih',
        deskripsi:'won the Public Information Openness Award 2018 from the Central Information Commission (KIP). The prestigious award was given by the Chairman '
    }
]
const berita = (index) =>{
    let img = document.getElementById("img-berita")
    let judul = document.getElementById("judul-berita")
    let deskripsi = document.getElementById("deskripsi-berita")
    let button = document.getElementsByClassName("button-berita")
    img.src = beritaData[index].img
    judul.innerHTML = beritaData[index].judul
    deskripsi.innerHTML = beritaData[index].deskripsi
    button[0].id = beritaData[index].id 
}

const gantiBerita = () =>{
    let i = 0;
    setInterval(() => {
        if(i === beritaData.length){
            i = 0
        }
        berita(i)
        i++;	
    }, 4000);
}

gantiBerita()
