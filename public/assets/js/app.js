const summaryList = document.getElementById("summaryList");
const btnKonfirmasi = document.getElementById("btnKonfirmasi");
const btnBayar = document.getElementById("btnBayar");
const btnBatal = document.getElementById("btnBatal");
const estimasiTotal = document.getElementById("estimasiTotal");
const buktiReservasi = document.getElementById("buktiReservasi");
const buktiReservasiInfo = document.getElementById("buktiReservasiInfo");
const paketMember = document.getElementById("paketMember");
const estimasiMember = document.getElementById("estimasiMember");
const buktiMembership = document.getElementById("buktiMembership");
const buktiMembershipInfo = document.getElementById("buktiMembershipInfo");
const btnDaftarMembership = document.getElementById("btnDaftarMembership");
const namaPIC = document.getElementById("namaPIC");
const kontakPIC = document.getElementById("kontakPIC");

const hargaPerJam = {
  "08:00": 120000,
  "10:00": 120000,
  "14:00": 150000,
  "18:00": 200000,
  "20:00": 200000,
};

function hitungEstimasi(jam, durasi) {
  const hargaDasar = hargaPerJam[jam] || 120000;
  return hargaDasar * Number(durasi || 1);
}

function formatRupiah(nominal) {
  return new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    maximumFractionDigits: 0,
  }).format(nominal);
}

function tampilkanNamaFile(inputFile, targetInfo) {
  if (!targetInfo) {
    return;
  }

  const fileName = inputFile?.files?.[0]?.name;
  targetInfo.textContent = fileName
    ? `File dipilih: ${fileName}`
    : "Belum ada file dipilih.";
}

function setSummary(statusText) {
  const tanggal = document.getElementById("tanggalMain")?.value || "-";
  const jam = document.getElementById("jamMain")?.value || "-";
  const durasi = document.getElementById("durasiMain")?.value || "-";
  const lapangan = document.getElementById("lapangan")?.value || "-";
  const estimasi = hitungEstimasi(jam, durasi);

  if (!summaryList) {
    return;
  }

  summaryList.innerHTML = [
    `<li>Tanggal: ${tanggal}</li>`,
    `<li>Jam: ${jam}</li>`,
    `<li>Durasi: ${durasi} jam</li>`,
    `<li>Lapangan: ${lapangan}</li>`,
    `<li>Status: ${statusText}</li>`,
  ].join("");

  if (estimasiTotal) {
    estimasiTotal.textContent = formatRupiah(estimasi);
  }
}

["tanggalMain", "jamMain", "durasiMain", "lapangan"].forEach((id) => {
  const element = document.getElementById(id);
  element?.addEventListener("change", () => {
    setSummary("Menunggu konfirmasi");
  });
});

setSummary("Menunggu konfirmasi");

paketMember?.addEventListener("change", () => {
  if (estimasiMember) {
    estimasiMember.textContent = formatRupiah(Number(paketMember.value || 0));
  }
});

buktiReservasi?.addEventListener("change", () => {
  tampilkanNamaFile(buktiReservasi, buktiReservasiInfo);
});

buktiMembership?.addEventListener("change", () => {
  tampilkanNamaFile(buktiMembership, buktiMembershipInfo);
});

if (estimasiMember && paketMember) {
  estimasiMember.textContent = formatRupiah(Number(paketMember.value || 0));
}

btnKonfirmasi?.addEventListener("click", () => {
  setSummary("Pesanan terkonfirmasi");
  alert("Pesanan berhasil dikonfirmasi. Lanjutkan ke pembayaran.");
});

btnBayar?.addEventListener("click", () => {
  if (!buktiReservasi?.files?.length) {
    alert("Silakan upload bukti pembayaran reservasi terlebih dahulu.");
    return;
  }

  setSummary("Pembayaran berhasil");
  alert("Pembayaran berhasil. Booking kamu sudah aktif.");
});

btnBatal?.addEventListener("click", () => {
  setSummary("Pesanan dibatalkan");
  alert("Pesanan dibatalkan.");
});

btnDaftarMembership?.addEventListener("click", () => {
  if (!namaPIC?.value.trim() || !kontakPIC?.value.trim()) {
    alert("Lengkapi nama PIC dan kontak PIC terlebih dahulu.");
    return;
  }

  if (!buktiMembership?.files?.length) {
    alert("Silakan upload bukti pembayaran membership terlebih dahulu.");
    return;
  }

  alert("Pendaftaran membership berhasil dikirim. Menunggu verifikasi admin.");
});
