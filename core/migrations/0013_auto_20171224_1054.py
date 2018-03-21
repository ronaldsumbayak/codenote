# Generated by Django 2.0 on 2017-12-24 03:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0012_auto_20171224_0834'),
    ]

    operations = [
        migrations.CreateModel(
            name='Reserved',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('word', models.CharField(max_length=64)),
            ],
        ),
        migrations.AlterField(
            model_name='code',
            name='code',
            field=models.SlugField(help_text='url identifier for this code, randomly generated by default', max_length=64, unique=True, verbose_name='Code'),
        ),
    ]