# Generated by Django 2.0 on 2017-12-24 00:03

import django.core.validators
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0003_auto_20171224_0639'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='submission',
            name='ti',
        ),
        migrations.AddField(
            model_name='submission',
            name='time',
            field=models.FloatField(default=0.0, help_text='execution time in seconds', validators=[django.core.validators.MinValueValidator(0.0)], verbose_name='Execution Time'),
            preserve_default=False,
        ),
        migrations.AlterField(
            model_name='compiler',
            name='id',
            field=models.PositiveIntegerField(help_text='compiler id', primary_key=True, serialize=False, verbose_name='Compiler ID'),
        ),
        migrations.AlterField(
            model_name='submission',
            name='id',
            field=models.PositiveIntegerField(help_text='submission id', primary_key=True, serialize=False, verbose_name='Submission ID'),
        ),
        migrations.AlterField(
            model_name='submission',
            name='memory',
            field=models.PositiveIntegerField(help_text='memory consumed by the program in kilobytes', verbose_name='Memory Consumed'),
        ),
    ]