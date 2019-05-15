from django.db import models


class Post(models.Model):
    input_field = models.DateField(auto_now_add=False)
    output_field = models.DateField(auto_now_add=False)
    sugest_out_field = models.TextField
    Email_Id = models.TextField


class Get(models.Model):
    sugest_out_field =models.TextField


