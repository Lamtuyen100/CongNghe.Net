OFFSET: bắt đầu

*Công thức phân trang:
{
	$tongSoTrangHT = ceil($tongSoDongDB / $soDongMuonHT)
    	$thuTuDongHT = ($soTrangHienTai - 1) * $soDongMuonHT

	SELECT * FROM `nameTable` ORDER BY `id` ASC LIMIT ".$soDongMuonHT." OFFSET ".$thuTuDongHT."

	Trong đó:
		$tongSoDongDB = SELECT * FROM `nameTable`
		$tongSoDongDB = $tongSoDongDB->num_rows
		
		
}