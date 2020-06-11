<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?> || <?= $skck->nama ?></title>
    <link rel="stylesheet" href="<?= base_url('app/css/print') ?>/style.css" />
</head>

<body>
    <main id="print">
        <header class="head">
            <div class="cops">
                <p>KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
                <p><?= $template->daerah_satuan ?></p>
                <p><?= $template->resor_satuan ?></p>
                <p><?= $template->alamat_satuan ?></p>
            </div>
            <div class="info">
                Tidak berlaku untuk keluar negeri
            </div>
        </header>
        <section class="body">
            <header>
                <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">SURAT KETERANGAN CATATAN KEPOLISIAN</p>
                <p id="en">POLICE RECORD</p>
                <p id="nSurat">Nomor : <?= $nomor_skck ?></p>
            </header>
            <article>
                <table id="bio">
                    <tr>
                        <td colspan="3">
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Diterangkan bersama ini bahwa :</p>
                            <p id="en">This is to certify that:</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Nama</p>
                            <p id="en">Name</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->nama ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Jenis Kelamin</p>
                            <p id="en">Sex</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->jk ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Kebangsaan</p>
                            <p id="en">Nationality</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->kebangsaan ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Agama</p>
                            <p id="en">Religion</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->agama ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Tempat dan tgl lahir</p>
                            <p id="en">Place and date of birth</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->tempat_lahir ?>, <?php
                                                                            $tgl = $skck->tanggal_lahir;
                                                                            $arr = explode('-', $tgl);
                                                                            $bulan = $this->db->get_where('bulan_romawi', ['id' => $arr[1]])->row_object();

                                                                            echo $arr[2] . ' ' . $bulan->bulan . ' ' . $arr[0];

                                                                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Tempat tinggal sekarang</p>
                            <p id="en">Current address</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->Alamat ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Pekerjaan</p>
                            <p id="en">Occuption</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->pekerjaan ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Nomor Kartu Tanda Penduduk</p>
                            <p id="en">Citizen Card number</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->no_ktp ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Nomor Paspor/KITAS/KITAP</p>
                            <p id="en">Passport/KITASKITAP number</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->paspor == '' ? '-' : $skck->paspor ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Rumus sidik jari</p>
                            <p id="en">Fingerrints formula</p>
                        </td>
                        <td>:</td>
                        <td>
                            <table id="sidik-jari">
                                <?php
                                function replace(string $str)
                                {
                                    if ($str == '-') {
                                        return '';
                                    } else {
                                        return $str;
                                    }
                                }
                                ?>
                                <tr>
                                    <th><?= $skck->rumus_1_jari ?></th>
                                    <th><?= $skck->rumus_2_jari ?></th>
                                    <th><?= $skck->rumus_3_jari ?></th>
                                    <th><?= $skck->rumus_4_jari ?></th>
                                    <th><?= $skck->rumus_5_jari ?></th>
                                    <th><?= $skck->rumus_6_jari ?></th>
                                </tr>
                                <tr>
                                    <th><?= $skck->rumus_7_jari ?></th>
                                    <th><?= $skck->rumus_8_jari ?></th>
                                    <th><?= $skck->rumus_9_jari ?></th>
                                    <th><?= $skck->rumus_10_jari ?></th>
                                    <th><?= $skck->rumus_11_jari ?></th>
                                    <th><?= $skck->rumus_12_jari ?></th>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">
                                Setelah diadakan penelitian hingga saat dikeluarkan surat
                                keteranganini yang didasarkan kepada:
                            </p>
                            <p id="en">
                                As of screening through the issue hereof by virtue of :
                            </p>
                        </td>
                    </tr>
                </table>
                <div class="keterangan">
                    <ol type="a">
                        <li>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Catatan Kepolisian yang ada</p>
                            <p id="en">Existing police record</p>
                        </li>
                        <li>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Surat keterangan dari Kepala Desa / Lurah</p>
                            <p id="en">Information from local Authorities</p>
                        </li>
                    </ol>
                    <p class="ket" id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">
                        <?= $template->pernyataan_id ?>
                    </p>
                    <p class="ket" id="en">
                        <?= $template->pernyataan_en ?>
                    </p>
                    <table id="tgl">
                        <tr>
                            <td>
                                <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">selama ia berada di Indonesia dari</p>
                                <p id="en">Onduring his/her stay in Indonesia from</p>
                            </td>
                            <td>:</td>
                            <td class="uppercase"><?php
                                                    $tgl = $skck->tanggal_lahir;
                                                    $arr = explode('-', $tgl);
                                                    $bulan = $this->db->get_where('bulan_romawi', ['id' => $arr[1]])->row_object();

                                                    echo $arr[2] . ' ' . $bulan->bulan . ' ' . $arr[0];

                                                    ?></td>
                        </tr>
                        <tr>
                            <td>
                                <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Sampai Dengan</p>
                                <p id="en">To</p>
                            </td>
                            <td>:</td>
                            <td class="uppercase">sekarang</td>
                        </tr>
                    </table>
                </div>
                <div class="keterangan2">
                    <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">
                        Keterangan ini diberikan berhubungan dengan permohonan
                    </p>
                    <p id="en">
                        This certificate is issued at the request to the applicant
                    </p>
                </div>
                <table id="keperluan">
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Untuk keperluan/menuju</p>
                            <p id="en">For the purpose</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?= $skck->keperluan ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Berlaku dari tanggal</p>
                            <p id="en">Valid from P0</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?php
                                                $tgl = date('Y-m-d');
                                                $arr = explode('-', $tgl);
                                                $bulan = $this->db->get_where('bulan_romawi', ['id' => $arr[1]])->row_object();

                                                echo $arr[2] . ' ' . $bulan->bulan . ' ' . $arr[0];

                                                ?></td>
                    </tr>
                    <tr>
                        <td>
                            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Sampai dengan</p>
                            <p id="en">To</p>
                        </td>
                        <td>:</td>
                        <td class="uppercase"><?php
                                                $tgl = date('Y-m-d', strtotime('+' . $template->skck_berlaku . ' month', time()));
                                                $arr = explode('-', $tgl);
                                                $bulan = $this->db->get_where('bulan_romawi', ['id' => $arr[1]])->row_object();

                                                echo $arr[2] . ' ' . $bulan->bulan . ' ' . $arr[0];

                                                ?></td>
                    </tr>
                </table>
                <div class="signature-area">
                    <div class="signature-box">
                        <table>
                            <tr>
                                <td>
                                    <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Dikeluarkan di</p>
                                    <p id="en">Issued in</p>
                                </td>
                                <td>:</td>
                                <td><?= $template->lokasi_cetak ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">Pada tanggal</p>
                                    <p id="en">On</p>
                                </td>
                                <td>:</td>
                                <td class="uppercase"><?php
                                                        $tgl = date('Y-m-d');
                                                        $arr = explode('-', $tgl);
                                                        $bulan = $this->db->get_where('bulan_romawi', ['id' => $arr[1]])->row_object();

                                                        echo $arr[2] . ' ' . $bulan->bulan . ' ' . $arr[0];

                                                        ?></td>
                            </tr>
                        </table>
                        <hr />
                        <div class="signature-content">
                            <p class="an">
                                <?= $template->atas_nama ?> <?= $template->satuan_kepala ?>
                            </p>
                            <p class="nama">
                                <?= $template->pejabat ?>
                            </p>
                            <hr />
                            <p class="jabatan">
                                <?= $template->jabatan ?>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <div class="photo-area">
            <img src="<?= base_url('pelayanan/image/' . $skck->id_skck . '/foto_ktp') ?>" alt="" />
        </div>
        <div class="note">
            <p id="head">Catatan / Note:</p>
            <p id="id" style="text-decoration: underline; text-transform: none; font-size: 10pt;">
                Apabila dikemudian hari ybs terlibat kejahatan / pelanggaran, SKCK ini
                dinyatakan tidak berlaku.
            </p>
            <p id="en">
                If the future is concerned involved in the crime / violations, SKCK is
                declared invalid
            </p>
        </div>
    </main>
    <!-- jQuery -->
    <script src="<?= base_url('app/') ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script>
        window.addEventListener("load", window.print());
        console.log(window.localStorage.getItem('contoh'));

        (function() {

            function update() {
                $.post('<?= base_url('api/print_done') ?>', {
                    'id_skck': <?= $skck->id_skck ?>
                }).done(function(data) {
                    if (!data.errors) {
                        alert(data.messages);
                        <?php $this->session->set_flashdata('success', 'Berkas ' . $nomor_skck . ' berhasil dicetak');
                        ?>
                        window.location.href = '<?= base_url('pelayanan/buat_skck_' . $skck->create_from) ?>'
                    } else {
                        if (confirm(data.messages + '. Klik OK/YES untuk mengulang pembaharuan status cetak berkas ini.')) {
                            update()
                        } else {
                            alert('Data akan disimpan di local storage');
                            var pending = [{
                                id_skck: <?= $skck->id_skck ?>,
                                nomor_skck: '<?= $nomor_skck ?>'
                            }]
                            <?php $this->session->set_flashdata('error', 'Berkas ' . $nomor_skck . ' gagal dicetak');
                            ?>
                            window.localStorage.setItem('pending', JSON.stringify(pending))
                            window.location.href = '<?= base_url('pelayanan/buat_skck_' . $skck->create_from) ?>'
                        }
                    }

                })
            }

            var afterPrint = function() {
                if (confirm('Apakah Berkas ini sudah di cetak?')) {
                    update()
                } else {
                    if (!confirm('Apakah ada kesalahan di berkas ini?')) {
                        alert('Maaf!! Anda seharusnya cetak ini jika tidak ada kesalahan.')
                        window.print()
                    }
                }
            };

            if (window.matchMedia) {
                var mediaWQueryList = window.matchMedia("print");
                mediaWQueryList.addListener(function(mql) {
                    if (mql.matches) {
                        // beforePrint();
                    } else {
                        afterPrint();
                    }
                });
            } else {
                window.onafterprint = afterPrint;
            }

        })(jQuery);
    </script>
</body>

</html>