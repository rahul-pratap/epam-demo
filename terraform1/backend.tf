terraform {
    backend "s3"{
        bucket = "terraform-11909964"
        key = "terraform.tfstate"
        region ="us-east-1"
        dynamodb_table = "terraform-11909964-s3"

    }
}