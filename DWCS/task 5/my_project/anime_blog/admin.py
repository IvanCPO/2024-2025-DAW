from django.contrib import admin
from .models import Serie, Category

class SerieAdmin(admin.ModelAdmin):
    list_display = ("title", "date", "author")
    list_filter = ("author", "categories", "date")
    prepopulated_fields = {"slug": ("title", )}
# Register your models here.
admin.site.register(Serie, SerieAdmin)
admin.site.register(Category)