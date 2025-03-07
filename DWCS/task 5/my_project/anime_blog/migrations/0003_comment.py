# Generated by Django 4.2.19 on 2025-02-24 10:06

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('anime_blog', '0002_alter_serie_description'),
    ]

    operations = [
        migrations.CreateModel(
            name='Comment',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('user_name', models.CharField(max_length=100)),
                ('email', models.EmailField(max_length=254)),
                ('comment_description', models.TextField(max_length=400)),
                ('date_comment', models.DateField(auto_now=True)),
                ('serie', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='anime_blog.serie')),
            ],
        ),
    ]
