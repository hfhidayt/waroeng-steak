//Ambil data dari file \resources\views\dashboard\index.blade.php
var k2 = document.getElementById("json2").getAttribute("data-kendaraan");
var ps2 = document.getElementById("json2").getAttribute("data-perawatan");

//Buat data yang telah diambil menjadi JSON
var kendaraan = JSON.parse(k2);
var noPlatK = JSON.parse(k2.toString());
var perawatan = JSON.parse(ps2)
var tahunPS2 = JSON.parse(ps2.toString());
var bulanPS2 = JSON.parse(ps2.toString());
var chartData2 = JSON.parse(ps2.toString());

//Menampilkan Banyaknya kendaraan yang ada di database
// document.getElementById("jk1").value = kendaraan.length;

//Menampilkan Jenis Perawatan ke Header Chart
document.getElementById('jp2').addEventListener('input', function(event) {
    document.getElementById('chart-jenis').innerHTML = event.target.value;

    var pb2 = document.getElementById('pb2').value;
    var pt2 = document.getElementById('pt2').value;
    if(event.target.value != '') {
        buatChart2(event.target.value, pt2);
    }

    if(pt2 != '') {
        hitungTotal2(pt2, event.target.value, pb2);
    } else {
        document.getElementById('t2').value = 'Rp' + new Intl.NumberFormat().format(0);
    }
});

//Memfilter dan menghitung total biaya berdasarkan bulan yang dipilih
document.getElementById('pb2').addEventListener('input', function(event) {
    var jp2 = document.getElementById('jp2').value;
    var pt2 = document.getElementById('pt2').value;
    if(pt2 != '') {
        hitungTotal2(pt2, jp2, event.target.value);
    } else {
        document.getElementById('t2').value = 'Rp' + new Intl.NumberFormat().format(0);
    }
});

//Menambahkan option ke select untuk memilih tahun yang hanya ada di database
//filter jika lebih dari 1 maka ditampilkan 1 saja
var tahun = {};
tahunPS2 = tahunPS2.filter(function(perawatan) {
    if(perawatan.tahun in tahun) {
        return false;
    } else {
        tahun[perawatan.tahun] = perawatan.tahun;
        return true;
    }
});
var select = document.getElementById('pt2');
for (a in tahunPS2) {
    var el = document.createElement('option');
    el.textContent = tahunPS2[a].tahun;
    el.value = tahunPS2[a].tahun;
    select.appendChild(el);
}

document.getElementById('pt2').addEventListener('input', function(event) {
    document.getElementById('chart-tahun').innerHTML = event.target.value;

    var jp2 = document.getElementById('jp2').value;
    if(event.target.value != '') {
        buatChart2(jp2, event.target.value);
    }

    var jp2 = document.getElementById('jp2').value;
    var pb2 = document.getElementById('pb2').value;
    if(event.target.value != '') {
        hitungTotal2(event.target.value, jp2, pb2);
    } else {
        document.getElementById('t2').value = 'Rp' + new Intl.NumberFormat().format(0);
    }
});

function buatChart2(a, b) {
    var chartJenis = chartData2.filter(function(perawatan) {
        if(perawatan.jenis_perawatan == a) {
            return true;
        } else if(a == '') {
            return true;
        } else {
            return false;
        }
    });
    var chartTahun = chartJenis.filter(function(perawatan) {
        if(perawatan.tahun == b) {
            return true;
        } else {
            return false;
        }
    });
    // var bArr = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var chartBulanJanuari = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Januari') {
            return true;
        } else {
            return false;
        }
    });
    totalJanuari = 0;
    for(i in chartBulanJanuari) {
        totalJanuari += chartBulanJanuari[i].total_biaya;
    }
    // chartBulanJanuari.forEach(function(total, index) {
    //     totalJanuari += chartBulanJanuari.total_biaya;
    // });
    // console.log(totalJanuari);

    var chartBulanFebruari = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Februari') {
            return true;
        } else {
            return false;
        }
    });
    totalFebruari = 0;
    for(i in chartBulanFebruari) {
        totalFebruari += chartBulanFebruari[i].total_biaya;
    }
    // console.log(totalFebruari);

    var chartBulanMaret = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Maret') {
            return true;
        } else {
            return false;
        }
    });
    totalMaret = 0;
    for(i in chartBulanMaret) {
        totalMaret += chartBulanMaret[i].total_biaya;
    }
    // console.log(totalMaret);

    var chartBulanApril = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'April') {
            return true;
        } else {
            return false;
        }
    });
    totalApril = 0;
    for(i in chartBulanApril) {
        totalApril += chartBulanApril[i].total_biaya;
    }
    // console.log(totalApril);

    var chartBulanMei = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Mei') {
            return true;
        } else {
            return false;
        }
    });
    totalMei = 0;
    for(i in chartBulanMei) {
        totalMei += chartBulanMei[i].total_biaya;
    }
    // console.log(totalMei);

    var chartBulanJuni = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Juni') {
            return true;
        } else {
            return false;
        }
    });
    totalJuni = 0;
    for(i in chartBulanJuni) {
        totalJuni += chartBulanJuni[i].total_biaya;
    }
    // console.log(totalJuni);

    var chartBulanJuli = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Juli') {
            return true;
        } else {
            return false;
        }
    });
    totalJuli = 0;
    for(i in chartBulanJuli) {
        totalJuli += chartBulanJuli[i].total_biaya;
    }
    // console.log(totalJuli);

    var chartBulanAgustus = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Agustus') {
            return true;
        } else {
            return false;
        }
    });
    totalAgustus = 0;
    for(i in chartBulanAgustus) {
        totalAgustus += chartBulanAgustus[i].total_biaya;
    }
    // console.log(totalAgustus);

    var chartBulanSeptember = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'September') {
            return true;
        } else {
            return false;
        }
    });
    totalSeptember = 0;
    for(i in chartBulanSeptember) {
        totalSeptember += chartBulanSeptember[i].total_biaya;
    }
    // console.log(totalSeptember);

    var chartBulanOktober = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Oktober') {
            return true;
        } else {
            return false;
        }
    });
    totalOktober = 0;
    for(i in chartBulanOktober) {
        totalOktober += chartBulanOktober[i].total_biaya;
    }
    // console.log(totalOktober);

    var chartBulanNovember = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'November') {
            return true;
        } else {
            return false;
        }
    });
    totalNovember = 0;
    for(i in chartBulanNovember) {
        totalNovember += chartBulanNovember[i].total_biaya;
    }
    // console.log(totalNovember);

    var chartBulanDesember = chartTahun.filter(function(perawatan) {
        if(perawatan.bulan == 'Desember') {
            return true;
        } else {
            return false;
        }
    });
    totalDesember = 0;
    for(i in chartBulanDesember) {
        totalDesember += chartBulanDesember[i].total_biaya;
    }
    // console.log(totalDesember);

    // var dataChart = [totalJanuari, totalFebruari, totalMaret, totalApril, totalMei, totalJuni, totalJuli, totalAgustus, totalSeptember, totalOktober, totalNovember, totalDesember];
    
    document.getElementById('kendaraan-chart-canvas').remove();
    document.getElementById('canvas-kendaraan').innerHTML = '<canvas id="kendaraan-chart-canvas"></canvas>';
    // canvas = document.getElementById('kendaraan-chart-canvas');
    // var ctx = document.getElementById("kendaraan-chart-canvas").getContext('2d');
    var ctx = document.getElementById('kendaraan-chart-canvas').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: 'Biaya',
                // data: [12000, 19000, 3000, 23000, 2000, 3000, 10000, 5000, 25000, 14000, 15000, 1000],
                data: [totalJanuari, totalFebruari, totalMaret, totalApril, totalMei, totalJuni, totalJuli, totalAgustus, totalSeptember, totalOktober, totalNovember, totalDesember],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return 'Rp' + new Intl.NumberFormat().format(context.raw);
                        }
                    }
                }
            },
            scales: {
                y: {
                    ticks: {
                        beginAtZero:true,
                        callback: function(value, index, ticks) {
                            return 'Rp' + new Intl.NumberFormat().format(value);
                        }
                    }
                }
            },
        }
    });
}

function hitungTotal2(x, y, z, w) {
    var tahun = bulanPS2.filter(perawatan => {
        if(perawatan.tahun == x) {
            return true;
        } else if(x == '') {
            return true;
        } else {
            return false;
        }
    });
    var jenisPerawatan = tahun.filter(perawatan => {
        if(perawatan.jenis_perawatan == y) {
            return true;
        } else if(y == '') {
            return true;
        } else {
            return false;
        }
    });
    var bulan = jenisPerawatan.filter(perawatan => {
        if(perawatan.bulan == z) {
            return true;
        } else if(z == '') {
            return true;
        } else {
            return false;
        }
    });
    // var no_plat = noPlatK.filter(kendaraan => {
    //     if(kendaraan.no_plat == w) {
    //         return true;
    //     } else if(w == '') {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // });
    var total = 0;
    for(i in bulan) {
        total += bulan[i].total_biaya;
    }
    // for(j in no_plat){
    //     total += no_plat[i].total_biaya;
    // }
    document.getElementById('t2').value = 'Rp' + new Intl.NumberFormat().format(total);
}