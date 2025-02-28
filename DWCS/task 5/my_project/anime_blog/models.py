from django.db import models

# Create your models here.
class Category(models.Model):
    title = models.CharField(max_length=70)
    description = models.TextField(max_length=300)
    
    def __str__(self):
        return self.title


class Serie (models.Model):
    title = models.CharField(max_length=70, null=False)
    description = models.TextField(max_length=700)
    picture = models.ImageField(upload_to="series", null=True)
    date = models.DateField()
    slug = models.SlugField(unique=True, db_index=True)
    author = models.CharField(max_length=150)
    categories = models.ManyToManyField(Category)
    
    def __str__(self):
        return f"{self.title.upper()} -> {self.author}"
    

class Comment (models.Model):
    user_name = models.CharField(max_length=100)
    email = models.EmailField()
    comment_description = models.TextField(max_length=400)
    date_comment = models.DateField(auto_now=True)
    serie = models.ForeignKey(Serie, on_delete=models.CASCADE)