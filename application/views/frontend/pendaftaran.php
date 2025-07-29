<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Diklat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { background: #f8f9fa; }
        .info-section { background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); padding: 24px; margin-bottom: 30px; }
        .card { border-radius: 8px; }
        .form-label { font-weight: 600; }
        .info-label { font-size: 0.95rem; color: #6c757d; font-weight: 500; margin-bottom: 4px; }
        .info-value { font-size: 1.1rem; color: #333; font-weight: 600; }
        .progress { border-radius: 10px; overflow: hidden; height: 8px; }
        .progress-bar { transition: width 0.6s ease; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand text-primary fw-bold" href="#">
                <i class="fas fa-graduation-cap me-2"></i>Portal Diklat
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="info-section mb-4">
                    <h4 class="mb-3"><i class="fas fa-calendar-alt text-success me-2"></i>Tentukan Periode/Gelombang</h4>
                    <div class="mb-4">
                        <label for="gelombang-select" class="form-label">
                            <i class="fas fa-wave-square me-2"></i>Pilih Gelombang Pendaftaran
                        </label>
                        <select class="form-select form-select-lg" id="gelombang-select" required>
                            <option value="">-- Pilih Gelombang --</option>
                            <option value="1">Gelombang 1</option>
                            <option value="2">Gelombang 2</option>
                            <option value="3">Gelombang 3</option>
                        </select>
                        <div class="form-text">Pilih gelombang pendaftaran yang sesuai dengan jadwal Anda</div>
                    </div>
                    <div id="periode-detail-container" class="mt-4">
                        <div class="card border-primary">
                            <div class="card-header bg-primary text-white">
                                <h6 class="card-title mb-0">
                                    <i class="fas fa-info-circle me-2"></i>Detail Periode Pendaftaran
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-label">Periode</div>
                                        <div class="info-value" id="detail-periode">-</div>
                                        <div class="info-label mt-3">Status Pendaftaran</div>
                                        <div class="info-value"><span id="detail-status" class="badge bg-secondary">-</span></div>
                                        <div class="info-label mt-3">Tanggal Pelaksanaan</div>
                                        <div class="info-value" id="detail-tanggal">-</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-label">Biaya (Rp.)</div>
                                        <div class="info-value text-success" id="detail-biaya">-</div>
                                        <div class="info-label mt-3">Kuota Total</div>
                                        <div class="info-value" id="detail-kuota">-</div>
                                        <div class="info-label mt-3">Sisa Kuota</div>
                                        <div class="info-value text-primary" id="detail-sisa-kuota">-</div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Kuota Terisi:</span>
                                        <span class="text-muted" id="progress-text">0/0</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" id="progress-bar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary btn-lg" id="btn-lanjut" disabled>
                            <i class="fas fa-arrow-right me-2"></i>Lanjutkan Pendaftaran
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h6 class="mb-0"><i class="fas fa-info-circle me-2"></i>Informasi Diklat</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Kategori Diklat</h6>
                            <p class="mb-0 fw-bold" id="kategori-diklat">SIPENCATAR DIKLAT PELAUT - PEMBENTUKAN III</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-1">Nama Diklat</h6>
                            <p class="mb-0 fw-bold" id="nama-diklat">DP-III NAUTIKA</p>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-muted mb-2">Persyaratan Administrasi</h6>
                            <p class="small text-muted mb-3">Silahkan siapkan beberapa informasi dan dokumen berikut untuk mempercepat proses pendaftaran.</p>
                            <ol class="small ps-3">
                                <li class="mb-1">File Scan PDF SKCK</li>
                                <li class="mb-1">File Scan PDF AKTE KELAHIRAN</li>
                                <li class="mb-1">File Scan PDF KTP</li>
                                <li class="mb-1">File Pas Foto Warna (Latar Belakang Biru untuk Nautika) jpeg</li>
                                <li class="mb-1">File Scan PDF Surat Keterangan Belum Menikah dari Kelurahan Setempat</li>
                                <li class="mb-1">File Scan PDF Surat Pernyataan Calon Siswa Diklat (Unduh di Menu Awal Pendaftaran Online)</li>
                                <li class="mb-1">File Scan PDF Raport Semester I sd V (khusus yang menggunakan paket C - IPA)</li>
                                <li class="mb-1">File Scan PDF Ijazah + Nilai Ijazah (Ijazah Pendidikan Terakhir)</li>
                                <li class="mb-1">File Scan PDF Kartu Keluarga</li>
                                <li class="mb-1">File Scan PDF Surat Keterangan Lulus (yang masih kelas XII)</li>
                                <li class="mb-1">File Scan PDF Surat Pernyataan Sanggup Tidak Menikah (Unduh di Menu Awal Pendaftaran Online)</li>
                                <li class="mb-1">File Scan Piagam Penghargaan Akademik / Non Akademik (Tingkat Provinsi)</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5><i class="fas fa-graduation-cap me-2"></i>Portal Diklat</h5>
                    <p>© 2024 Divisi IT - Politeknik Pelayaran Banten</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script>
        console.log('Script loaded!');
        
        // Simple approach - langsung isi dropdown saat page load
        window.onload = function() {
            console.log('Window loaded!');
            loadGelombangData();
        };
        
        function loadGelombangData() {
            const select = document.getElementById('gelombang-select');
            if (!select) {
                console.error('Select element not found!');
                return;
            }
            
            console.log('Loading gelombang data...');
            
            // Load data from database
            fetch('<?= base_url("pendaftaran/get_periode_list/14-01807-46") ?>')
                .then(response => response.json())
                .then(data => {
                    console.log('Data loaded:', data);
                    
                    let options = '<option value="">-- Pilih Gelombang --</option>';
                    
                    if (data && data.length > 0) {
                        // Get unique periods
                        const periods = [...new Set(
                            data
                                .filter(item => item.kouta > 0 && item.is_exist == 1)
                                .map(item => item.periode)
                        )].sort();
                        
                        console.log('Available periods:', periods);
                        
                        periods.forEach(periode => {
                            options += `<option value="${periode}">Gelombang ${periode}</option>`;
                        });
                    }
                    
                    select.innerHTML = options;
                    console.log('Dropdown updated with real data!');
                    
                    // Add change event
                    select.addEventListener('change', function() {
                        const value = this.value;
                        console.log('Selected:', value);
                        if (value) {
                            showPeriodeDetail(value, data);
                        } else {
                            // Reset to default values when no gelombang selected
                            resetPeriodeDetail();
                        }
                    });
                })
                .catch(error => {
                    console.error('Error loading data:', error);
                    // Fallback to static options
                    select.innerHTML = `
                        <option value="">-- Pilih Gelombang --</option>
                        <option value="1">Gelombang 1</option>
                        <option value="2">Gelombang 2</option>
                        <option value="3">Gelombang 3</option>
                    `;
                });
        }
        
        function showPeriodeDetail(gelombang, allData) {
            console.log('Showing detail for gelombang:', gelombang);
            
            // Filter data for selected gelombang
            const gelombangData = allData.filter(item => 
                item.periode == gelombang && item.kouta > 0 && item.is_exist == 1
            );
            
            if (gelombangData.length > 0) {
                const periode = gelombangData[0];
                const totalKuota = gelombangData.reduce((sum, item) => sum + (parseInt(item.kouta) || 0), 0);
                const totalSisa = gelombangData.reduce((sum, item) => sum + (parseInt(item.sisa_kursi) || 0), 0);
                const totalTerisi = totalKuota - totalSisa;
                const persentase = totalKuota > 0 ? (totalTerisi / totalKuota) * 100 : 0;
                const isOpen = gelombangData.some(item => item.is_daftar == 1);

                // Update detail display dengan data real
                const detailPeriode = document.getElementById('detail-periode');
                const detailStatus = document.getElementById('detail-status');
                const detailTanggal = document.getElementById('detail-tanggal');
                const detailBiaya = document.getElementById('detail-biaya');
                const detailKuota = document.getElementById('detail-kuota');
                const detailSisaKuota = document.getElementById('detail-sisa-kuota');
                const progressText = document.getElementById('progress-text');
                const progressBar = document.getElementById('progress-bar');

                if (detailPeriode) detailPeriode.textContent = 'Gelombang ' + (gelombang || '-');

                if (detailStatus) {
                    detailStatus.textContent = isOpen ? 'Buka Pendaftaran' : 'Tutup Pendaftaran';
                    detailStatus.className = 'badge ' + (isOpen ? 'bg-success' : 'bg-danger');
                }

                if (detailTanggal) {
                    const tanggalPelaksanaan = periode.pelaksanaan_mulai && periode.pelaksanaan_akhir ?
                        formatDate(periode.pelaksanaan_mulai) + ' - ' + formatDate(periode.pelaksanaan_akhir) : '-';
                    const tanggalPendaftaran = periode.pendaftaran_mulai && periode.pendaftaran_akhir ?
                        formatDate(periode.pendaftaran_mulai) + ' - ' + formatDate(periode.pendaftaran_akhir) : '-';

                    detailTanggal.innerHTML = `
                        <div><strong>Pelaksanaan:</strong> ${tanggalPelaksanaan}</div>
                        <div class="text-muted small mt-1"><strong>Pendaftaran:</strong> ${tanggalPendaftaran}</div>
                    `;
                }

                // Biaya: jika ada field biaya di database, tampilkan, jika tidak tampilkan '-'
                if (detailBiaya) detailBiaya.textContent = (periode.biaya && periode.biaya !== '0') ? periode.biaya : '-';
                if (detailKuota) detailKuota.textContent = totalKuota ? totalKuota.toLocaleString() : '-';
                if (detailSisaKuota) detailSisaKuota.textContent = totalSisa ? totalSisa.toLocaleString() : '-';

                // Update progress bar
                if (progressText) progressText.textContent = (totalTerisi ? totalTerisi.toLocaleString() : '-') + '/' + (totalKuota ? totalKuota.toLocaleString() : '-');
                if (progressBar) {
                    progressBar.style.width = totalKuota ? persentase + '%' : '0%';
                    progressBar.setAttribute('aria-valuenow', persentase);
                    progressBar.className = 'progress-bar';
                    if (persentase < 50) {
                        progressBar.classList.add('bg-success');
                    } else if (persentase < 80) {
                        progressBar.classList.add('bg-warning');
                    } else {
                        progressBar.classList.add('bg-danger');
                    }
                }
            } else {
                // Reset to default values if no data
                resetPeriodeDetail();
            }
        }
        
        function resetPeriodeDetail() {
            const elements = {
                'detail-periode': '-',
                'detail-status': '-',
                'detail-tanggal': '-',
                'detail-biaya': '-',
                'detail-kuota': '-',
                'detail-sisa-kuota': '-',
                'progress-text': '-/-'
            };
            
            Object.keys(elements).forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    if (id === 'detail-status') {
                        el.textContent = elements[id];
                        el.className = 'badge bg-secondary';
                    } else {
                        el.textContent = elements[id];
                    }
                }
            });
            
            // Reset progress bar
            const progressBar = document.getElementById('progress-bar');
            if (progressBar) {
                progressBar.style.width = '0%';
                progressBar.className = 'progress-bar bg-secondary';
            }
        }
        
        function formatDate(dateStr) {
            if (!dateStr) return '-';
            const date = new Date(dateStr);
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
            return date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear();
        }
            
            // Add event listener for dropdown change
            const gelombangSelect = document.getElementById('gelombang-select');
            if (gelombangSelect) {
                gelombangSelect.addEventListener('change', function() {
                    const selectedGelombang = this.value;
                    if (selectedGelombang) {
                        loadPeriodeDetail(selectedGelombang);
                        const btnLanjut = document.getElementById('btn-lanjut');
                        if (btnLanjut) btnLanjut.disabled = false;
                    } else {
                        const container = document.getElementById('periode-detail-container');
                        if (container) container.style.display = 'none';
                        const btnLanjut = document.getElementById('btn-lanjut');
                        if (btnLanjut) btnLanjut.disabled = true;
                    }
                });
            }
        });
        
        function loadGelombangOptions() {
            console.log('Loading gelombang options...');
            
            const selectElement = document.getElementById('gelombang-select');
            if (!selectElement) {
                console.error('Gelombang select element not found!');
                return;
            }
            
            // Test fetch to endpoint
            fetch('<?= base_url("pendaftaran/get_periode_list/14-01807-46") ?>')
                .then(response => {
                    console.log('Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Raw data:', data);
                    
                    // Simple processing - just add available periodes
                    let options = '<option value="">-- Pilih Gelombang --</option>';
                    
                    if (data && Array.isArray(data)) {
                        // Get unique periodes that have valid data
                        const periodes = [...new Set(data
                            .filter(item => item.periode && item.kouta > 0 && item.is_exist == 1)
                            .map(item => item.periode)
                        )].sort();
                        
                        console.log('Available periodes:', periodes);
                        
                        periodes.forEach(periode => {
                            options += `<option value="${periode}">Gelombang ${periode}</option>`;
                        });
                    }
                    
                    console.log('Setting options:', options);
                    selectElement.innerHTML = options;
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });
        }
            
            // Handle lanjutkan pendaftaran
            $('#btn-lanjut').click(function() {
                const selectedGelombang = $('#gelombang-select').val();
                if (selectedGelombang) {
                    // Get the selected periode data
                    const selectedData = JSON.parse(localStorage.getItem('selectedPeriodeData') || '{}');
                    // Redirect to actual registration form
                    window.location.href = '<?= base_url("pendaftaran/form") ?>?gelombang=' + selectedGelombang + '&jadwal_id=' + selectedData.id;
                }
            });
        });
        
        function loadDiklatInfo() {
            // Get diklat info from URL parameter or default
            const urlParams = new URLSearchParams(window.location.search);
            const diklatId = urlParams.get('diklat_id') || '14-01807-46'; // Default DP-III NAUTIKA
            
            // Load diklat information via fetch
            fetch('<?= base_url("pendaftaran/get_diklat_info") ?>/' + diklatId)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const kategoriElement = document.getElementById('kategori-diklat');
                        const namaElement = document.getElementById('nama-diklat');
                        
                        if (kategoriElement) kategoriElement.textContent = data.kategori_diklat;
                        if (namaElement) namaElement.textContent = data.nama_diklat;
                    }
                })
                .catch(error => {
                    console.log('Error loading diklat info:', error);
                });
        }
        
        function loadPeriodeDetail(gelombang) {
            console.log('Loading periode detail for gelombang:', gelombang);
            
            const urlParams = new URLSearchParams(window.location.search);
            const diklatId = urlParams.get('diklat_id') || '14-01807-46';
            
            fetch('<?= base_url("pendaftaran/get_periode_list") ?>/' + diklatId)
                .then(response => response.json())
                .then(data => {
                    // Filter data untuk gelombang yang dipilih dan yang valid
                    const gelombangData = data.filter(item => 
                        item.periode == gelombang && 
                        item.pelaksanaan_mulai && item.pelaksanaan_akhir && 
                        item.kouta > 0 && item.is_exist == 1
                    );
                    
                    if (gelombangData.length > 0) {
                        // Use first item for main details
                        const periode = gelombangData[0];
                        
                        // Calculate totals for all items in this gelombang
                        const totalKuota = gelombangData.reduce((sum, item) => sum + parseInt(item.kouta), 0);
                        const totalSisaKuota = gelombangData.reduce((sum, item) => sum + parseInt(item.sisa_kursi), 0);
                        const totalTerisi = totalKuota - totalSisaKuota;
                        const persentase = totalKuota > 0 ? (totalTerisi / totalKuota) * 100 : 0;
                        
                        // Check if any period is open for registration
                        const isOpen = gelombangData.some(item => item.is_daftar == 1);
                        const statusText = isOpen ? 'Buka Pendaftaran' : 'Tutup Pendaftaran';
                        const statusClass = isOpen ? 'bg-success' : 'bg-danger';
                        
                        // Format dates
                        const tanggalPelaksanaan = formatDate(periode.pelaksanaan_mulai) + ' - ' + formatDate(periode.pelaksanaan_akhir);
                        const tanggalPendaftaran = periode.pendaftaran_mulai && periode.pendaftaran_akhir ? 
                            formatDate(periode.pendaftaran_mulai) + ' - ' + formatDate(periode.pendaftaran_akhir) : '-';
                        
                        // Update display
                        const detailPeriode = document.getElementById('detail-periode');
                        const detailTanggal = document.getElementById('detail-tanggal');
                        const detailBiaya = document.getElementById('detail-biaya');
                        const detailKuota = document.getElementById('detail-kuota');
                        const detailStatus = document.getElementById('detail-status');
                        const detailSisaKuota = document.getElementById('detail-sisa-kuota');
                        const progressText = document.getElementById('progress-text');
                        const progressBar = document.getElementById('progress-bar');
                        const container = document.getElementById('periode-detail-container');
                        
                        if (detailPeriode) detailPeriode.textContent = 'Gelombang ' + gelombang;
                        if (detailTanggal) detailTanggal.innerHTML = `
                            <div><strong>Pelaksanaan:</strong> ${tanggalPelaksanaan}</div>
                            <div class="text-muted small mt-1"><strong>Pendaftaran:</strong> ${tanggalPendaftaran}</div>
                        `;
                        if (detailBiaya) detailBiaya.textContent = 'Sesuai Ketentuan';
                        if (detailKuota) detailKuota.textContent = totalKuota.toLocaleString();
                        if (detailStatus) {
                            detailStatus.className = 'badge ' + statusClass;
                            detailStatus.textContent = statusText;
                        }
                        if (detailSisaKuota) detailSisaKuota.textContent = totalSisaKuota.toLocaleString();
                        
                        // Update progress bar
                        if (progressText) progressText.textContent = totalTerisi.toLocaleString() + '/' + totalKuota.toLocaleString();
                        if (progressBar) {
                            progressBar.style.width = persentase + '%';
                            progressBar.setAttribute('aria-valuenow', persentase);
                            
                            // Change progress bar color based on availability
                            progressBar.className = 'progress-bar';
                            if (persentase < 50) {
                                progressBar.classList.add('bg-success');
                            } else if (persentase < 80) {
                                progressBar.classList.add('bg-warning');
                            } else {
                                progressBar.classList.add('bg-danger');
                            }
                        }
                        
                        // Store data for form submission
                        localStorage.setItem('selectedPeriodeData', JSON.stringify(periode));
                        
                        // Show detail container
                        if (container) container.style.display = 'block';
                    } else {
                        const container = document.getElementById('periode-detail-container');
                        if (container) container.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Error loading periode detail:', error);
                    const container = document.getElementById('periode-detail-container');
                    if (container) container.style.display = 'none';
                });
        }
        
        function formatDate(dateString) {
            if (!dateString) return '-';
            
            const date = new Date(dateString);
            const months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            
            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear();
            
            return `${day} ${month} ${year}`;
        }
        
        function formatDateShort(dateString) {
            if (!dateString) return '-';
            
            const date = new Date(dateString);
            const months = [
                'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
            ];
            
            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear();
            
            return `${day} ${month} ${year}`;
        }
        
        function formatDate(dateString) {
            if (!dateString) return '-';
            const date = new Date(dateString);
            return date.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: '2-digit', 
                year: 'numeric'
            });
        }
    </script>
</body>
</html>
