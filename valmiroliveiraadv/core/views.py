from django.shortcuts import render
from django.http import HttpResponse

def home(request):
    return render(request, 'home.html', {'usuario': 'Test'})

def escritorio(request):
    return render(request,'escritorio.html')

def area_atuacao(request):
    return render(request, 'area_atuacao.html')
