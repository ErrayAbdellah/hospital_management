<?php
    $connection = new DbConnection();
    $connect = $connection->connection();

    class AdminCrud {
        public function addDoctor($data, $connect){
            $query = "insert into doctor(name, email, pwd, specialties) values(:name, :email, :pwd, :specialties)";
            $stmt = $connect->prepare($query);
            $stmt->execute([":name" => $data["name"], ":email" => $data["email"], ":pwd" => $data["pwd"], ":specialties" => $data["specialties"]]) ;
        }

        public function displayDoctor(){
            global $connect;
            $query = "select * from doctor";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                echo
                '<tr>
                    <th scope="row">'.$row["name"].'</th>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["specialties"].'</td>
                    <td>
                    <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="editDoctor('.$row["id"].')"><i class="fas fa-pen"></i> Edit </button>
                    <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure"><i class="fa fa-eye"></i> View </button>
                    <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure" data-bs-toggle="modal" data-bs-target="#deleteDoctor"><i class="fa fa-trash" ></i> Remove </button>
                    </td>
                </tr>';
            }
        }

        public function counter($property){
            global $connect;
            switch($property){
                case "doctors":
                    $query = "select count(*) from doctor";
                    $stmt = $connect->prepare($query);
                    $stmt->execute();
                    $number_of_rows = $stmt->fetchColumn();
                    return $number_of_rows;
            }
        }

        public function editDoctor($id){
            global $connect;

            $query = "select * from doctor where id = $id";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        }

        public function updateDoctor(){
            global $connect;

            $id = $_POST['doctorId'];
            $name = $_POST['fullName'];
            $specialty = $_POST['specialties'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "update doctor set name = '$name', email = '$email', pwd = '$password', specialties = '$specialty' where id = '$id'";
            $stmt = $connect->prepare($query);
            $stmt->execute();
        }

        public function deleteDoctor(){

        }

        public function addSession(){

        }

        public function deleteSession(){

        }
        
        public function displayPatientData(){

        }
    }
    $admin = new AdminCrud;