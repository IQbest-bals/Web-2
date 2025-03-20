<?php
class Animals{
    public $Animals = ['Monyet', 'Kambing', 'Kuda', 'Kucing', 'Biawak'];
    
    function index(){
        echo "<ol>";
        foreach ($this->Animals as $key => $value) {
            echo "<li>$key. $value</li>";
        }
        echo "<ol>";
    }
    function store($hewan){
        array_push($this->Animals, $hewan);

        $this->index();
    }
    public function update($key, $value)
    {
        if (isset($this->Animals[$key])){
            $this->Animals[$key] = $value;
            //Memanggil method index untuk menampilkan data yang telah diupdate
            $this->index();
        } else{
            echo "Hewan tidak ditemukan";
        }
    }
    public function destroy($key){
        if (isset($this->Animals[$key])){
            unset($this->Animals[$key]);
            //memanggil method index untuk menampilkan data yang telah dihapus
            $this->index();
    }
}
}
$hewan = new Animals();
echo "index - menampilkan seluruh data hewan<br>";
$hewan->index();
echo "<br>";

echo "Store - Menambahkan data hewan baru (Burung)<br>";
$hewan->store("Burung");
echo "<br>";

echo "Update - Mengubah data hewan<br>";
$hewan->update(0,"Monyet Baru");
echo "<br>";

echo "Destroy - Mengubah data hewan<br>";
$hewan->destroy(0);
echo "<br>";

?>