from django.shortcuts import render, get_object_or_404
from .models import Post

# Create your views here.
def main (request):
    posts = Post.objects.all().order_by("-date")[:3]
    return render(request,"index.html", {"posts":posts})


def detail (request, slug):
    post = get_object_or_404(Post,slug=slug)
    return render(request,"detail.html", {"post":post})


def all (request):
    posts = Post.objects.all().order_by("-date")
    return render(request,"blog/includes/posts.html", {"posts":posts})
